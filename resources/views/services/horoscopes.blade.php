@extends('layouts.app')	

@section('content')

	<div class="container-fluid">
		<div class="serviceOverlay jumbotron bg-transparent">
		  <h1>राशीहरू</h1>
		  <hr class="my-4">
		  <br><br>
		</div>
	</div>	

	<div class="white jumbotron" id="about">
	  <br><br>
	  <h2>के हो <span class="orange">राशीहरू?</span></h2>
	  	<div class="row">
	  		<div class="col-sm-12 col-md-7">
	  			<br>
	  			<h4>राशीहरू बारे</h4>
	  			<p>
	  				<br>राशीहरू मूलतः काल्पनिक तारापुञ्जहरू हुन् । सूर्यले पृथ्वीको वरिपरि ब्रह्माण्डमा घुम्ने बाटो वृत्त (वास्तवमा केही दीर्घवृत्त) ३६० डिग्रीको हुन्छ । यसलाई १२ भागमा विभाजन गरिएको छ, प्रत्येक ३०/३० डिग्रीको। यो ३० डिग्रीभित्र जुन नामको तारापुञ्ज पर्दछ, त्यो राशी भनेर जानिन्छ। यी राशीहरू हुन् – मेष, वृष, मिथुन, कर्कट, सिंह, कन्या, तुला, वृश्चिक, धनु, मकर, कुम्भ र मिन। एकमा मेष र एवम् क्रमले बाह्रमा मिन। यिनीहरूले मोटामोटी रूपमा यिनै शब्दहरूले सङ्केत गरेका तारापुञ्जको आकारलाई निर्देशित गरेका हुन्छन् – मेषको मतलब भेँडा, वृषको मतलब साँढे आदि। अनि त्यस्तै ग्रहहरू भए सूर्य, चन्द्र, बुध, शुक्र, मङ्गल, वृहस्पति र शनी – जम्मा सात। यीबाहेक पूर्वीय ज्योतिषमा दुईवटा काल्पनिक ग्रहहरू राहु र केतुलाई पनि छन्। यिनीहरू वास्तवमा चन्द्र कक्ष र सूर्य कक्ष काटिएका विन्दुहरू हुन्, भौतिक ग्रहहरू होइनन्। त्यसैले जहिले पनि यिनीहरू परस्पर विपरित दिशामा रहेका हुन्छन्।
	  			</p>
	  		</div>
	  		<div class="col-sm-12 col-md-5" align="center">
	  			<img class="img-fluid" src="{{ asset('images/horoscope.png') }}">
	  		</div>
	  	</div>
	  	<br>
	</div>	

@endsection()			