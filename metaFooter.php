<!-- SCRIPTS -->
<script src="https://<?php echo $host; ?>/js/jquery-1.11.1.min.js"></script>
<script src="https://<?php echo $host; ?>/js/smooth-scroll.min.js"></script>
<script src="https://<?php echo $host; ?>/js/instafeed.min.js"></script>
<script src="https://<?php echo $host; ?>/js/common.js"></script>
<script src="https://<?php echo $host; ?>/js/custom_tt_201912.js"></script>
<script type="text/javascript">
var feed = new Instafeed({
    get: 'user',
    userId: 4099797030,
    clientId: 'ab3efc57482e4e5b87a278bdf22092cf',
    accessToken: '4099797030.ab3efc5.91039c566d3e482bb2573ccb20729b79',
    sortBy: 'most-recent',
    limit: 6,
    links: true,
    resolution: 'low_resolution',
    template: '<li><a href="{{link}}" target="_blank"><img src="{{image}}" /></a></li>'
});
feed.run();
</script>
</body>
</html>