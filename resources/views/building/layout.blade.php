@include('building.Layout.tophtml')
<head>
@include('building.Layout.head')
<body>
<!-- Left Panel -->
@include('building.Layout.aside')<!-- /#left-panel -->
<!-- Left Panel -->
<!-- Right Panel -->
<div id="right-panel" class="right-panel">
    <!-- Header-->
@include('building.Layout.header')<!-- /header -->
    <!-- Header-->
    @yield('content')
</div>
<!-- /#right-panel -->
<!--時間日期選擇器-->
@include('building.Layout.datetimepicker')
</head>
<!-- Right Panel -->
@include('building.Layout.script')
</body>
</html>
