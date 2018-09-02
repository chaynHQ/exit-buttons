/* Add to the bottom of the page */

	function addHideSiteButton() {
?>
<div id="hide-site">
    <button onclick="hideSite()">Leave site</button>
</div>

<script>
    function hideSite() {
        window.open("https://en.wikipedia.org/wiki/Main_Page", "_newtab");
        location.replace("https://www.google.co.uk/search?tbm=isch&sa=1&ei=esSCW4LPH4WugQaZsbqoDw&q=cute+baby+animal+memes&oq=cute+baby+animal+memes&gs_l=")
    }
</script>
	}
	add_action('theme_after_body_tag_start','addHideSiteButton')
?>
