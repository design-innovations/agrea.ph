---
layout: default
name: Team
title: AGREA Team
summary: The easy to use page generator for Joomla
collection:
    model: ext:joomla.model.articles
    state:
        limit: 0
        published: 1
        category: [9]
        sort: date
        order: asc
process:
    filters: [plugins]
---
<div class="flex flex-col sm:flex-row" itemscope itemtype="http://schema.org/Organization">
	<div class="sm:w-3/4 sm:pr-8 sm:py-8 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0">
		<div class="flex flex-wrap w-full mb-20">
			<div class="lg:w-1/2 w-full mb-6 lg:mb-0">
				<h1 class="sm:text-5xl text-4xl font-medium font-title mb-2 text-gray-900 leading-none"><?= $title; ?></h1>
				<div class="h-1 w-20 bg-green-500 rounded"></div>
			</div>
		</div>
		<div class="grid xl:grid-cols-3 md:grid-cols-2 gap-8 mb-8">
			<? foreach(collection() as $article): ?>
			<div class="bg-gray-100 p-6 rounded-lg">
				<a class="text-gray-900 hover:text-gray-600" href="<?= route(page('team/article'), ['slug' => $article->slug]) ?>">
					<img class="h-40 rounded w-full object-cover object-center mb-6" src="<?= $article->image->url ?>" alt="<?= $article->title; ?>">
				</a>
				<div class="text-sm"><?= $article->excerpt; ?></div>
				<h2 class="text-lg text-gray-900 font-medium font-title mb-4 leading-tight">
					<a class="text-gray-900 hover:text-gray-600" href="<?= route(page('team/article'), ['slug' => $article->slug]) ?>">
						<span itemprop="alumni" itemscope itemtype="http://schema.org/Person">
							<span itemprop="name"><?= $article->title; ?></span>
						</span>
					</a>
				</h2>
			</div>
			<? endforeach; ?>
		</div>
	</div>
	<div class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">
		<img class="rounded w-full mb-6 object-contain" src="images://team/agrea-team.jpg" alt="<?= $title; ?>" title="<?= $title; ?>">
		<h3 class="text-base text-gray-900 font-medium font-title my-4">Contact Details:</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
		<dl itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
			<dt>Marinduque Office:</dt>
			<dd itemprop="streetAddress">AGREA Farm Estate, Barangay Cawit, Boac,</dd>
			<dd itemprop="postalCode">4900,</dd>
			<dd itemprop="addressLocality">Marinduque, Philippines</dd>
		</dl>
		<dl>
			<dt>Tel:</dt>
			<dd itemprop="telephone">+63 (042) 332-0025</dd>
			<dd itemprop="telephone">+63 917 888 6505</dd>
			<dd itemprop="telephone">+63 933 824 6020</dd>
		</dl>
		<dl itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
			<dt>Makati Office:</dt>
			<dd itemprop="streetAddress">3/F LRI Design Plaza, 210 Nicanor Garcia, Makati City,</dd>
			<dd itemprop="postalCode">1209,</dd>
			<dd itemprop="addressLocality">Metro Manila, Philippines</dd>
		</dl>
		<dl>
			<dt>Tel:</dt>
			<dd itemprop="telephone">+63 (02) 886-9800</dd>
		</dl>
		<h3 class="text-base text-gray-900 font-medium font-title my-4">Email Addresses:</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
		<dl>
			<dt>General Inquiries:</dt>
			<dd itemprop="email"><a href="mailto:hello@agrea.ph">hello@agrea.ph</a></dd>
			<dt>Careers, Internships, Recruitment, & Human Resource:</dt>
			<dd itemprop="email"><a href="mailto:hr@agrea.ph">hr@agrea.ph</a></dd>
			<dt>AGREA Farm School:</dt>
			<dd itemprop="email"><a href="mailto:farmschool@agrea.ph">farmschool@agrea.ph</a></dd>
			<dt>AGREA 1000 Strong:</dt>
			<dd itemprop="email"><a href="mailto:1000strong@agrea.ph">1000strong@agrea.ph</a></dd>
		</dl>
		<h3 class="text-base text-gray-900 font-medium font-title my-4">Social Media Accounts:</h3>
		<div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
		<dl>
			<dt>Facebook:</dt>
			<dd><a href="https://www.facebook.com/agreaph">facebook.com/agreaph</a></dd>
			<dt>Instagram:</dt>
			<dd><a href="https://www.instagram.com/agreaphl/">@agreaphl</a></dd>
			<dt>Twitter:</dt>
			<dd><a href="https://www.twitter.com/agreaphl">@AgreaPHL</a></dd>
			<dt>Website:</dt>
			<dd><a href="https://www.agreaph.com" itemprop="url">Website</a></dd>
		</dl>
	</div>
</div>