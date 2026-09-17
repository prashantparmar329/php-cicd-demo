<?php
// Mock data for demonstration (Replace this with your database fetch logic)
$posts = [
    [
        'title' => 'Embracing Minimalist Web Design in 2026',
        'excerpt' => 'Discover why stripping away the noise creates a better reading experience and faster load times for your audience.',
        'category' => 'Design',
        'date' => 'Sep 15, 2026',
        'read_time' => '4 min read',
        'image' => 'https://unsplash.com'
    ],
    [
        'title' => 'The Future of Lightweight PHP Applications',
        'excerpt' => 'Why modern developers are returning to raw, optimized PHP paired with utility-first CSS frameworks.',
        'category' => 'Development',
        'date' => 'Sep 12, 2026',
        'read_time' => '6 min read',
        'image' => 'https://unsplash.com'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aesthetic Minimal Blog</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://tailwindcss.com"></script>
    <link href="https://googleapis.com" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#faf9f6] text-neutral-800 antialiased selection:bg-neutral-900 selection:text-white">

    <!-- Header / Navigation -->
    <header class="max-w-4xl mx-auto px-6 py-8 flex items-center justify-between border-b border-neutral-200/60">
        <a href="#" class="text-xl font-bold tracking-tight text-neutral-900">Aura.<span class="text-neutral-400 font-light">php</span></a>
        <nav class="flex gap-6 text-sm font-medium text-neutral-600">
            <a href="#" class="hover:text-neutral-900 transition-colors">Articles</a>
            <a href="#" class="hover:text-neutral-900 transition-colors">About</a>
            <a href="#" class="hover:text-neutral-900 transition-colors">Contact</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto px-6 py-12">
        
        <!-- Hero Section -->
        <div class="mb-16">
            <span class="text-xs font-semibold uppercase tracking-widest text-neutral-400 mb-3 block">Thought & Code</span>
            <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-neutral-900 mb-4 leading-[1.15]">
                Minimalist ideas, crafted for the modern web.
            </h1>
            <p class="text-lg text-neutral-600 max-w-2xl font-light">
                Exploring design systems, backend engineering, and the beauty of simple code architecture.
            </p>
        </div>

        <!-- Blog Grid -->
        <div class="grid gap-10 sm:grid-cols-2">
            <?php foreach ($posts as $post): ?>
                <article class="group cursor-pointer flex flex-col bg-white rounded-2xl border border-neutral-200/60 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="overflow-hidden aspect-[16/9] bg-neutral-100">
                        <img src="<?= htmlspecialchars($post['image']) ?>" alt="<?= htmlspecialchars($post['title']) ?>" class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center gap-3 text-xs font-semibold text-neutral-400 mb-3">
                            <span class="text-neutral-900 bg-neutral-100 px-2.5 py-1 rounded-full"><?= htmlspecialchars($post['category']) ?></span>
                            <span>•</span>
                            <span><?= htmlspecialchars($post['read_time']) ?></span>
                        </div>
                        <h2 class="text-xl font-bold tracking-tight text-neutral-900 group-hover:text-neutral-600 transition-colors mb-2">
                            <?= htmlspecialchars($post['title']) ?>
                        </h2>
                        <p class="text-sm text-neutral-600 font-light mb-6 flex-grow line-clamp-2">
                            <?= htmlspecialchars($post['excerpt']) ?>
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t border-neutral-100 text-xs text-neutral-400">
                            <span><?= htmlspecialchars($post['date']) ?></span>
                            <span class="font-medium text-neutral-900 group-hover:translate-x-1 transition-transform inline-flex items-center gap-1">Read article &rarr;</span>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

    </main>

    <!-- Footer -->
    <footer class="max-w-4xl mx-auto px-6 py-8 border-t border-neutral-200/60 mt-16 text-center text-xs text-neutral-400">
        &copy; <?= date('Y') ?> Aura. Powered by PHP & Tailwind CSS.
    </footer>

</body>
</html>
