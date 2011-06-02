/**
 * Ligatures.js by Chip Cullen
 * http://chipcullen.com/ligatures/ 
 * Special thanks to http://stackoverflow.com/questions/119441/highlight-a-word-with-jquery
 */
jQuery(document).ready(function() {
	jQuery.fn.ligature = function (str, lig)
	{
	    return this.each(function ()
	    {
	        this.innerHTML = this.innerHTML.replace(
	            new RegExp(str, "g"),
	            lig
	        );
	    });
	};
	
	jQuery("h1").ligature("fi", "&#xFB01;").ligature("fl", "&#xFB02;").ligature('AE','&AElig;').ligature('ae','&aelig;');
});

