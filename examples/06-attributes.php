<?php

#[Attribute(flags: Attribute::TARGET_METHOD)]
class Route
{
    public function __construct(string $path, string|array $method = 'GET', string $name = null)
    {
        $this->path = $path;
        $this->methods = is_string($method) ? [$method] : $method;
    }
}

class ArticleController
{
    #[Route('/articles', name: 'articles.index')]
    public function index()
    {
        return [];
    }

    #[Route('/articles/{id}', name: 'articles.show')]
    public function show($id)
    {
        return [
            'id' => $id,
        ];
    }

    #[Route('/articles/{id}', name: 'articles.destroy')]
    public function delete($id)
    {
        return [
            'id' => $id,
        ];
    }
}

// Example of how to use Reflection to extract the routes from the attributes of the controller methods
$controller = new ArticleController();
$reflection = new ReflectionClass($controller);

foreach ($reflection->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {
    $attributes = $method->getAttributes(Route::class);

    foreach ($attributes as $attribute) {
        /** @var Route */
        $route = $attribute->newInstance();
        foreach ($route->methods as $httpMethod) {
            echo $httpMethod . ' ' . $route->path . ' -> ' . $controller::class . '@' . $method->getName() . PHP_EOL;
        }
    }
}
