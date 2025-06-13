jQuery(document).ready(function() {
    setTimeout(function() {

let element = document.querySelector(".my-element");
typer(element).
	line('<span class="type--base">Was there a class you wanted to take, but didn\'t have time for?</span>')
	.pause(500)
	.back('empty')
	.continue('<span class="type--base">Maybe you need a refresher?</span>',60)
	.pause(1000)
	.back('empty')
	.continue('<span class="type--base">Or were hoping to attend a conference that you just couldn’t get to?</span>', 60)
	.pause(1000)
	.back('empty')
	.continue('<span class="type--base">The dynamic ministry contexts of today necessitate continuous learning.</span>', 60)
	.pause(800)
	.line('<span class="type--base">ThriveU supports </span>', 60)
	.continue('<span class="type--base">pastors</span>', 60)
	.pause(800)
	.back(7, 3)
	.continue('<span class="type--base">teachers</span>', 60)
	.pause(800)
	.back(8, 3)
	.continue('<span class="type--base">lay ministers</span>', 60)
	.pause(800)
	.back(13, 3)
	.continue('<span class="type--base">counselors</span>', 60)
	.pause(800)
	.back(10, 3)
	.continue('<span class="type--base">missionaries</span>', 60)
	.pause(800)
	.back(12, 3)
	.continue('<span class="type--base">you...</span>', 60)
	.pause(800)
	.continue('<span class="type--base">providing real help for real life.</span>', 60)
	.pause(800)
	.line('<span class="type--base">POWERED by Asbury for Life and FREE to Asbury Seminary Alumni.</span>', 60)
.pause(300)

	.end()
;
}, 2000);
});