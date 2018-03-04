<?php
namespace MPF\Renderer;

/**
 * Class Renderer
 * @package MPF
 */
interface RendererInterface
{
    /**
     * Permet d'ajouter un chemin pour charger les vues
     * @param string $namespace
     * @param null|string $path
     */
    public function addPath(string $namespace, ?string $path = null): void;

    /**
     * Permet de rendre une vue
     * Le chemin peut être précisé avec des namespaces rajoutés via le addPath()
     * @param string $view
     * @param array $params
     * @return string
     */
    public function render(string $view, array $params = []): string;

    /**
     * Permet d'ajouter des variables globales à toutes les vues
     * @param string $key
     * @param mixed $value
     */
    public function addGlobal(string $key, $value): void;
}
