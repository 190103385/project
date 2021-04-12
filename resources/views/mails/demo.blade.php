Hello, <i>{{ $demo->receiver }}</i>,
<p>This is demo for testing, HTML edition</p>

<p><u>Demo object values:</u></p>

<div>
	<p><b>Demo one:</b>&nbsp; {{ $demo->demo_one }}</p>
	<p><b>Demo two:</b>&nbsp; {{ $demo->demo_two }}</p>
</div>

<p><u>Test var values:</u></p>

<div>
	<p><b>testVarOne:</b>&nbsp; {{ $testVarOne }}</p>
	<p><b>testVarTwo:</b>&nbsp; {{ $testVarTwo }}</p>
</div>

Thank you!
<br>
Sincerely <i> {{ $demo->sender }} </i>