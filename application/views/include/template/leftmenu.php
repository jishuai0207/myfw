<script id="submenu" type="text/html">
    {{each submenu as value i}}
	<li><a href="{{value.url}}" target="main">{{value.name}}</a></li>
    {{/each}}
</script>
