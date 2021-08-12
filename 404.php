<?php
/**
 * The template for displaying the 404 template in the Alfred Knows theme.
 *
 * @package WordPress
 * @subpackage Alfred_Knows
 * @since Alfred Knows 1.0
 */

get_header();
?>
<div class="bg-white min-h-screen px-4 py-16 sm:px-6 sm:py-24 md:grid md:place-items-center lg:px-8">
	<div class="max-w-max mx-auto">
		<main class="sm:flex">
			<p class="text-4xl font-extrabold text-rose-100 sm:text-5xl">404</p>
			<div class="sm:ml-6">
				<div class="sm:border-l sm:border-gray-200 sm:pl-6">
					<h1 class="text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">Page not found</h1>
					<p class="mt-1 text-base text-gray-500">Please check the URL in the address bar and try again.</p>
				</div>
				<div class="mt-10 flex space-x-3 sm:border-l sm:border-transparent sm:pl-6">
					<a href="/" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-rose-100 hover:bg-rose-200">Go back home</a>
					<a href="/contact" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-rose-100 bg-gray-50 hover:bg-gray-100">Contact support</a>
				</div>
			</div>
		</main>
	</div>
</div>
<?php
get_footer();
