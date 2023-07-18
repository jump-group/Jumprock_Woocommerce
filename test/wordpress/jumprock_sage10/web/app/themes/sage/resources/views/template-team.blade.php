{{-- 
  Template Name: Team
--}}

@extends('layouts.app')

@section('content')
	<div class="bg-white">
		<!-- Header -->
		<div class="relative bg-gray-800 pb-32">
			<div class="absolute inset-0">
				<img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&&sat=-100" alt="">
				<div class="absolute inset-0 bg-gray-800 mix-blend-multiply" aria-hidden="true"></div>
			</div>
			<div class="relative mx-auto max-w-7xl py-24 px-6 sm:py-32 lg:px-8">
				<h1 class="text-4xl font-bold tracking-tight text-white md:text-5xl lg:text-6xl">Support</h1>
				<p class="mt-6 max-w-3xl text-xl text-gray-300">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames. Dui, amet, nec sit pulvinar.</p>
			</div>
		</div>

		<!-- Overlapping cards -->
		<section class="relative z-10 mx-auto -mt-32 max-w-7xl px-6 pb-32 lg:px-8" aria-labelledby="contact-heading">
			<h2 class="sr-only" id="contact-heading">Contact us</h2>
			<div class="grid grid-cols-1 gap-y-20 lg:grid-cols-3 lg:gap-y-0 lg:gap-x-8">
				<div class="flex flex-col rounded-2xl bg-white shadow-xl">
					<div class="relative flex-1 px-6 pt-16 pb-8 md:px-8">
						<div class="absolute top-0 inline-block -translate-y-1/2 transform rounded-xl bg-indigo-600 p-5 shadow-lg">
							<!-- Heroicon name: outline/phone -->
							<svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
							</svg>
						</div>
						<h3 class="text-xl font-medium text-gray-900">Sales</h3>
						<p class="mt-4 text-base text-gray-500">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames.</p>
					</div>
					<div class="rounded-bl-2xl rounded-br-2xl bg-gray-50 p-6 md:px-8">
						<a href="#" class="text-base font-medium text-indigo-700 hover:text-indigo-600">Contact us<span aria-hidden="true"> &rarr;</span></a>
					</div>
				</div>

				<div class="flex flex-col rounded-2xl bg-white shadow-xl">
					<div class="relative flex-1 px-6 pt-16 pb-8 md:px-8">
						<div class="absolute top-0 inline-block -translate-y-1/2 transform rounded-xl bg-indigo-600 p-5 shadow-lg">
							<!-- Heroicon name: outline/lifebuoy -->
							<svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" d="M16.712 4.33a9.027 9.027 0 011.652 1.306c.51.51.944 1.064 1.306 1.652M16.712 4.33l-3.448 4.138m3.448-4.138a9.014 9.014 0 00-9.424 0M19.67 7.288l-4.138 3.448m4.138-3.448a9.014 9.014 0 010 9.424m-4.138-5.976a3.736 3.736 0 00-.88-1.388 3.737 3.737 0 00-1.388-.88m2.268 2.268a3.765 3.765 0 010 2.528m-2.268-4.796a3.765 3.765 0 00-2.528 0m4.796 4.796c-.181.506-.475.982-.88 1.388a3.736 3.736 0 01-1.388.88m2.268-2.268l4.138 3.448m0 0a9.027 9.027 0 01-1.306 1.652c-.51.51-1.064.944-1.652 1.306m0 0l-3.448-4.138m3.448 4.138a9.014 9.014 0 01-9.424 0m5.976-4.138a3.765 3.765 0 01-2.528 0m0 0a3.736 3.736 0 01-1.388-.88 3.737 3.737 0 01-.88-1.388m2.268 2.268L7.288 19.67m0 0a9.024 9.024 0 01-1.652-1.306 9.027 9.027 0 01-1.306-1.652m0 0l4.138-3.448M4.33 16.712a9.014 9.014 0 010-9.424m4.138 5.976a3.765 3.765 0 010-2.528m0 0c.181-.506.475-.982.88-1.388a3.736 3.736 0 011.388-.88m-2.268 2.268L4.33 7.288m6.406 1.18L7.288 4.33m0 0a9.024 9.024 0 00-1.652 1.306A9.025 9.025 0 004.33 7.288" />
							</svg>
						</div>
						<h3 class="text-xl font-medium text-gray-900">Technical Support</h3>
						<p class="mt-4 text-base text-gray-500">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames.</p>
					</div>
					<div class="rounded-bl-2xl rounded-br-2xl bg-gray-50 p-6 md:px-8">
						<a href="#" class="text-base font-medium text-indigo-700 hover:text-indigo-600">Contact us<span aria-hidden="true"> &rarr;</span></a>
					</div>
				</div>

				<div class="flex flex-col rounded-2xl bg-white shadow-xl">
					<div class="relative flex-1 px-6 pt-16 pb-8 md:px-8">
						<div class="absolute top-0 inline-block -translate-y-1/2 transform rounded-xl bg-indigo-600 p-5 shadow-lg">
							<!-- Heroicon name: outline/newspaper -->
							<svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
							</svg>
						</div>
						<h3 class="text-xl font-medium text-gray-900">Media Inquiries</h3>
						<p class="mt-4 text-base text-gray-500">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames.</p>
					</div>
					<div class="rounded-bl-2xl rounded-br-2xl bg-gray-50 p-6 md:px-8">
						<a href="#" class="text-base font-medium text-indigo-700 hover:text-indigo-600">Contact us<span aria-hidden="true"> &rarr;</span></a>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!--
			This example requires some changes to your config:
			
			```
			// tailwind.config.js
			module.exports = {
					// ...
					plugins: [
							// ...
							require('@tailwindcss/aspect-ratio'),
					],
			}
			```
	-->
	<div class="bg-white">
		<div class="mx-auto max-w-7xl py-12 px-6 lg:px-8 lg:py-24">
			<div class="space-y-12">
				<div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
					<h2 class="text-3xl font-bold tracking-tight sm:text-4xl">Our Team</h2>
					<p class="text-xl text-gray-500">Odio nisi, lectus dis nulla. Ultrices maecenas vitae rutrum dolor ultricies donec risus sodales. Tempus quis et.</p>
				</div>
				<ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
					<li>
						<div class="space-y-4">
							<div class="aspect-w-3 aspect-h-2">
								<img class="rounded-lg object-cover shadow-lg" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
							</div>

							<div class="space-y-2">
								<div class="space-y-1 text-lg font-medium leading-6">
									<h3>Lindsay Walton</h3>
									<p class="text-indigo-600">Front-end Developer</p>
								</div>
								<ul role="list" class="flex space-x-5">
									<li>
										<a href="#" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">Twitter</span>
											<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
												<path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
											</svg>
										</a>
									</li>
									<li>
										<a href="#" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">LinkedIn</span>
											<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
												<path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="space-y-4">
							<div class="aspect-w-3 aspect-h-2">
								<img class="rounded-lg object-cover shadow-lg" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
							</div>

							<div class="space-y-2">
								<div class="space-y-1 text-lg font-medium leading-6">
									<h3>Lindsay Walton</h3>
									<p class="text-indigo-600">Front-end Developer</p>
								</div>
								<ul role="list" class="flex space-x-5">
									<li>
										<a href="#" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">Twitter</span>
											<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
												<path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
											</svg>
										</a>
									</li>
									<li>
										<a href="#" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">LinkedIn</span>
											<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
												<path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="space-y-4">
							<div class="aspect-w-3 aspect-h-2">
								<img class="rounded-lg object-cover shadow-lg" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
							</div>

							<div class="space-y-2">
								<div class="space-y-1 text-lg font-medium leading-6">
									<h3>Lindsay Walton</h3>
									<p class="text-indigo-600">Front-end Developer</p>
								</div>
								<ul role="list" class="flex space-x-5">
									<li>
										<a href="#" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">Twitter</span>
											<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
												<path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
											</svg>
										</a>
									</li>
									<li>
										<a href="#" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">LinkedIn</span>
											<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
												<path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="space-y-4">
							<div class="aspect-w-3 aspect-h-2">
								<img class="rounded-lg object-cover shadow-lg" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
							</div>

							<div class="space-y-2">
								<div class="space-y-1 text-lg font-medium leading-6">
									<h3>Lindsay Walton</h3>
									<p class="text-indigo-600">Front-end Developer</p>
								</div>
								<ul role="list" class="flex space-x-5">
									<li>
										<a href="#" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">Twitter</span>
											<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
												<path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
											</svg>
										</a>
									</li>
									<li>
										<a href="#" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">LinkedIn</span>
											<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
												<path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="space-y-4">
							<div class="aspect-w-3 aspect-h-2">
								<img class="rounded-lg object-cover shadow-lg" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
							</div>

							<div class="space-y-2">
								<div class="space-y-1 text-lg font-medium leading-6">
									<h3>Lindsay Walton</h3>
									<p class="text-indigo-600">Front-end Developer</p>
								</div>
								<ul role="list" class="flex space-x-5">
									<li>
										<a href="#" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">Twitter</span>
											<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
												<path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
											</svg>
										</a>
									</li>
									<li>
										<a href="#" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">LinkedIn</span>
											<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
												<path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="space-y-4">
							<div class="aspect-w-3 aspect-h-2">
								<img class="rounded-lg object-cover shadow-lg" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
							</div>

							<div class="space-y-2">
								<div class="space-y-1 text-lg font-medium leading-6">
									<h3>Lindsay Walton</h3>
									<p class="text-indigo-600">Front-end Developer</p>
								</div>
								<ul role="list" class="flex space-x-5">
									<li>
										<a href="#" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">Twitter</span>
											<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
												<path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
											</svg>
										</a>
									</li>
									<li>
										<a href="#" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">LinkedIn</span>
											<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
												<path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="space-y-4">
							<div class="aspect-w-3 aspect-h-2">
								<img class="rounded-lg object-cover shadow-lg" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
							</div>

							<div class="space-y-2">
								<div class="space-y-1 text-lg font-medium leading-6">
									<h3>Lindsay Walton</h3>
									<p class="text-indigo-600">Front-end Developer</p>
								</div>
								<ul role="list" class="flex space-x-5">
									<li>
										<a href="#" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">Twitter</span>
											<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
												<path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
											</svg>
										</a>
									</li>
									<li>
										<a href="#" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">LinkedIn</span>
											<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
												<path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="space-y-4">
							<div class="aspect-w-3 aspect-h-2">
								<img class="rounded-lg object-cover shadow-lg" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
							</div>

							<div class="space-y-2">
								<div class="space-y-1 text-lg font-medium leading-6">
									<h3>Lindsay Walton</h3>
									<p class="text-indigo-600">Front-end Developer</p>
								</div>
								<ul role="list" class="flex space-x-5">
									<li>
										<a href="#" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">Twitter</span>
											<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
												<path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
											</svg>
										</a>
									</li>
									<li>
										<a href="#" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">LinkedIn</span>
											<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
												<path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="space-y-4">
							<div class="aspect-w-3 aspect-h-2">
								<img class="rounded-lg object-cover shadow-lg" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
							</div>

							<div class="space-y-2">
								<div class="space-y-1 text-lg font-medium leading-6">
									<h3>Lindsay Walton</h3>
									<p class="text-indigo-600">Front-end Developer</p>
								</div>
								<ul role="list" class="flex space-x-5">
									<li>
										<a href="#" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">Twitter</span>
											<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
												<path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
											</svg>
										</a>
									</li>
									<li>
										<a href="#" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">LinkedIn</span>
											<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
												<path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="space-y-4">
							<div class="aspect-w-3 aspect-h-2">
								<img class="rounded-lg object-cover shadow-lg" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
							</div>

							<div class="space-y-2">
								<div class="space-y-1 text-lg font-medium leading-6">
									<h3>Lindsay Walton</h3>
									<p class="text-indigo-600">Front-end Developer</p>
								</div>
								<ul role="list" class="flex space-x-5">
									<li>
										<a href="#" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">Twitter</span>
											<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
												<path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
											</svg>
										</a>
									</li>
									<li>
										<a href="#" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">LinkedIn</span>
											<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
												<path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="space-y-4">
							<div class="aspect-w-3 aspect-h-2">
								<img class="rounded-lg object-cover shadow-lg" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
							</div>

							<div class="space-y-2">
								<div class="space-y-1 text-lg font-medium leading-6">
									<h3>Lindsay Walton</h3>
									<p class="text-indigo-600">Front-end Developer</p>
								</div>
								<ul role="list" class="flex space-x-5">
									<li>
										<a href="#" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">Twitter</span>
											<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
												<path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
											</svg>
										</a>
									</li>
									<li>
										<a href="#" class="text-gray-400 hover:text-gray-500">
											<span class="sr-only">LinkedIn</span>
											<svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
												<path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>

					<!-- More people... -->
				</ul>
			</div>
		</div>
	</div>
@endsection
