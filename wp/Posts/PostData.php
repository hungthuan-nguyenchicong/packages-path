<?php
// wp/Posts/PostData.php
namespace Vendorpath\Wp\Posts;

class PostData
{
    public function __construct(
        public readonly string $title,
        public readonly string $content,
        public readonly array $keywords,
        public readonly array $schemaJsonLd, // Ví dụ thêm trường JSON-LD
    ) {}

    public static function fromModel($post): self
    {
        return new self(
            title: (string) data_get($post, 'title', ''),
            content: (string) self::cleanContent($post),
            keywords: self::extractKeywords($post),
            schemaJsonLd: self::generateJsonLd($post)
        );
    }

    /**
     * Xử lý content
     */

   private static function cleanContent($post): string
{
    $rawContent = data_get($post, 'content', '');
    
    // 1. Xóa Gutenberg comments (nhọn mở - chấm cảm - gạch - gạch ...)
    $patternComments = '/<' . '!--' . '.*?' . '--' . '>/s';
    $content = preg_replace($patternComments, '', $rawContent);
    
    // 2. Loại bỏ xuống dòng và tab
    $content = str_replace(["\r", "\n", "\t"], ' ', $content);

    // 3. Xóa các thẻ HTML rỗng (ví dụ <p> </p> hoặc <p></p>)
    // Regex này tìm các thẻ có thể chứa khoảng trắng bên trong nhưng không có chữ
    $content = preg_replace('/<p>\s*<\/p>/', '', $content);
    
    // 4. Gom nhiều khoảng trắng thành 1
    $content = preg_replace('/\s+/', ' ', $content);
    
    return trim((string) $content);
}

    /**
     * Xử lý bóc tách Keywords
     */
    private static function extractKeywords($post): array
    {
        $rawTags = data_get($post, 'terms.tag', []);
        $keywords = [];
        
        foreach ($rawTags as $slug => $name) {
            $keywords[] = [
                'name' => $name,
                'link' => url('/tag/' . $slug)
            ];
        }
        
        return $keywords;
    }

    /**
     * Xử lý tạo cấu trúc JSON-LD cho SEO
     */
    private static function generateJsonLd($post): array
    {
        return [
            "@context" => "https://schema.org",
            "@type" => "Article",
            "headline" => data_get($post, 'title'),
            "image" => [data_get($post, 'image')],
            "datePublished" => data_get($post, 'post_date'),
            // Thêm các logic phức tạp khác ở đây...
        ];
    }
}