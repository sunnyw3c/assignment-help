<?php get_header(); ?>
<!-- Dynamic Blog Menu -->
<div class="bg-white border-b border-gray-100 mb-8 sticky top-[74px] z-40">
    <div class="container mx-auto px-4 max-w-6xl">
        <div class="flex overflow-x-auto py-4 hide-scrollbar">
            <?php if (has_nav_menu('blog_menu')) : ?>
                <?php wp_nav_menu([
                    'theme_location' => 'blog_menu',
                    'menu_class' => 'flex space-x-8 text-sm font-semibold text-gray-600',
                    'container' => false,
                ]); ?>
            <?php else: ?>
                <ul class="flex space-x-8 text-sm font-semibold text-gray-600">
                    <li class="whitespace-nowrap"><a href="/blog" class="hover:text-purple-600">All Posts</a></li>
                    <?php wp_list_categories([
                        'title_li' => '',
                        'style' => 'list',
                        'class' => 'flex space-x-8 text-sm font-semibold text-gray-600 whitespace-nowrap'
                    ]); ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</div>

<main class="flex-grow container mx-auto px-4 pb-12 max-w-6xl">
    <div class="flex flex-col lg:flex-row gap-8">
        <!-- Main Content -->
        <div class="lg:w-2/3">
            <div class="bg-white rounded-2xl shadow-sm p-8">
                <?php while (have_posts()) : the_post(); ?>
                    <article>
                        <h1 class="text-4xl font-black text-gray-900 mb-4"><?php the_title(); ?></h1>
                        <div class="text-sm text-gray-500 mb-8 pb-8 border-b border-gray-100 flex items-center gap-4">
                            <span>📅 <?php echo get_the_date(); ?></span>
                            <span>✍️ <?php the_author(); ?></span>
                        </div>
                        <div class="prose prose-purple max-w-none prose-lg prose-img:rounded-xl">
                            <?php the_content(); ?>
                        </div>
                        <div class="mt-12 pt-8 border-t border-gray-100">
                            <?php comments_template(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
        </div>

        <!-- Dynamic Sidebar -->
        <aside class="lg:w-1/3">
            <?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
                <?php dynamic_sidebar( 'blog-sidebar' ); ?>
            <?php else: ?>
                <div class="bg-white rounded-2xl shadow-sm p-6 mb-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Recent Posts</h3>
                    <ul class="space-y-3">
                        <?php wp_get_archives(['type' => 'postbypost', 'limit' => 5]); ?>
                    </ul>
                </div>
            <?php endif; ?>
        </aside>
    </div>
</main>
<?php get_footer(); ?>
