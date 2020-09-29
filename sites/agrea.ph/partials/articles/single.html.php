<div class="max-w-4xl m-auto mt-8">
<ktml:images max-width="80%" data-lazyload="progressive">
	<h1 itemprop="name" class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 leading-none"><?= $article->title ?></h1>
	<div class="h-1 w-20 bg-green-500 rounded mb-6"></div>
	<img itemprop="image" class="rounded w-full mb-6" src="<?= $article->image->url ?>" alt="<?= $article->title; ?>" data-lazyload="progressive-inline">
	<p class="mt-2 text-xs font-medium flex flex-row justify-between">
		<span itemprop="author" itemscope itemtype="http://schema.org/Person">
			<span itemprop="name"><?//= $article->getAuthor()->getName() ?></span>
		</span>
		<span class="leading-relaxed text-dark-green-500 flex items-center">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5 mr-1" stroke="currentColor">
			  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
			</svg> <?= date($article->published_date, 'd M, Y'); ?>
		</span>
	</p>
	<div class="mt-2" itemprop="articleBody" content="<?= escape(strip_tags($article->text)) ?>"><?= $article->text ?></div>
</ktml:images>
</div>
