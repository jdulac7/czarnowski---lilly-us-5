var $=jQuery.noConflict();objectFitImages(),new Blazy({offset:200}),$(document).ready(function(){$("iframe").mediaWrapper(),$("table").tableit(),$("#nav li:has(ul)").doubleTapToGo(),$('a[target="_blank"]:not([rel="noopener noreferrer"])').each(function(){$(this).attr("rel","noopener noreferrer").addClass("external")})});