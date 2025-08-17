<?php

namespace App\Controller;

use App\Repository\BlogPostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class IndexController extends AbstractController
{
    function __construct(
        private BlogPostRepository $blog_post_repository,
    )
    {}

    #[Route('/', name: 'app_index')]
    public function index()
    {
        $blog_posts = $this->blog_post_repository->findAll();
        return $this->render("/index/index.twig", [
            'blog_posts' => $blog_posts,
        ]);
    }
}
