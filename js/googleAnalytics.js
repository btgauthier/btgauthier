<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58179671-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');
  ga(‘set’, ‘&uid’, {{USER_ID}}); // Set the user ID using signed-in user_id.


	// Get tracker.
	Tracker t = ((AnalyticsSampleApp) getActivity().getApplication()).getTracker(
	TrackerName.APP_TRACKER);
	
	// Enable Display Features.
	t.enableAdvertisingIdCollection(true);
	
	// Assumes a tracker has already been initialized with a property ID, otherwise
	// getDefaultTracker returns nil.
	id tracker = [[GAI sharedInstance] defaultTracker];
	
	// Enable IDFA collection.
	tracker.allowIDFACollection = YES;



</script>