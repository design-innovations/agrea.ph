---
layout: default
route: news/[:slug]
collection:
    extend: news
metadata:
    'og:type': article
visible: false
---

<?= import('/partials/articles/single.html', [
	'article' => collection(),
]); ?>

<div class="max-w-4xl m-auto mt-8">
	<p>The following is a full list of all the team members alphabetically.</p>
	<?= import('/partials/articles/list.html', [
		'categoryID' => ['9',], // team
		'categorySlug' => 'team',
		'limit' => '6',
	]); ?>
</div>