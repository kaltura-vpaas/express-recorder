<?php

<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<div>
		<h1>Record Yourself Demo!</h1>
	</div>
	<div>
		<p>Just hit record, say hello, and watch the recording before you upload.</p>
    
		<script src="https://www.kaltura.com/apps/expressrecorder/latest/express-recorder.js"></script>
    
		<div id="recorder" style="width: 560px; height: 316px;"></div>
    
      <script type="text/javascript">
      var component = Kaltura.ExpressRecorder.create('recorder', {
          "ks": "<KALTURA SESSION>",
          "serviceUrl": "https://www.kaltura.com",
          "playerUrl": "https://cdnapisec.kaltura.com",
          "app": "appName",
          "conversionProfileId": null,
          "partnerId": "<PARTNER ID>",
          "entryName": "<Name of Recording>",
          "uiConfId": "<PLAYER ID>"
      });
     </script>
	</div>
</body>
</html>     
  
