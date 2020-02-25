<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sufee Admin - HTML5 Admin Template</title>
<meta name="description" content="Sufee Admin - HTML5 Admin Template">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="apple-touch-icon" href="{{asset('apple-icon.png')}}">
<link rel="shortcut icon" href="{{asset('favicon.ico')}}">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('vendors/themify-icons/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('vendors/flag-icon-css/css/flag-icon.min.css')}}">
<link rel="stylesheet" href="{{asset('vendors/selectFX/css/cs-skin-elastic.css')}}">
<link rel="stylesheet" href="{{asset('vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<link rel="stylesheet" href="{{asset('css/bootstrap-datetimepicker.min.css')}}">
<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datetimepicker.zh-CN.js')}}"></script>
<script src="{{asset('js/moment.min.js')}}"></script>

<link rel="stylesheet" href="{{asset('css/daterangepicker-bs3.css')}}">
<script src="{{asset('js/daterangepicker.js')}}"></script>
<script src="{{asset('js/moment.min.js')}}"></script>

<script src="{{asset('http://code.jquery.com/jquery-1.10.2.js')}}"></script>

<script src="{{asset('http://code.jquery.com/ui/1.11.4/jquery-ui.js')}}"></script>

<link rel="stylesheet" href="{{asset('Css/bootstrap-datetimepicker.min.css')}}" rel="external nofollow" >
<script src="{{asset('Js/bootstrap-datetimepicker.js')}}"></script>
<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
<meta http-equiv="description" content="this is my page">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<script type="text/javascript" src="{{asset('js/jquery-1.8.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap-maxlength.js')}}"></script>

<!--時間日期選擇器-->
<link rel="stylesheet" href="{{asset('jquery.datetimepicker.min.css')}}">
<script src="{{asset('jquery.js')}}"></script>
<script src="{{asset('jquery.datetimepicker.full.js')}}"></script>
<script>
    $(function() {
        $( "#datepicker" ).datepicker();
        $( "#anim" ).change(function() {
            $( "#datepicker" ).datepicker( "option", "showAnim", $( this ).val() );
        });
    });
</script>

<script>
    $(function() {
        $( "#datepicker2" ).datepicker();
        $( "#anim" ).change(function() {
            $( "#datepicker2" ).datepicker( "option", "showAnim", $( this ).val() );
        });
    });
</script>

{{--新增刪除--}}
<script>
    function save_para_table(){

        var tableinfo = gettableinfo();
        alert(tableinfo);


    }
    //get table infomation
    function gettableinfo(){
        var key = "";
        var value = "";
        var tabledata = "";
        var table = $("#para_table");
        var tbody = table.children();
        var trs = tbody.children();
        for(var i=1;i<trs.length;i++){
            var tds = trs.eq(i).children();
            for(var j=0;j<tds.length;j++){
                if(j==0){
                    if(tds.eq(j).text()==null||tds.eq(j).text()==""){
                        return null;
                    }
                    key = "key\":\""+tds.eq(j).text();
                }
                if(j==1){
                    if(tds.eq(j).text()==null||tds.eq(j).text()==""){
                        return null;
                    }
                    value = "value\":\""+tds.eq(j).text();
                }
            }
            if(i==trs.length-1){
                tabledata += "{\""+key+"\",\""+value+"\"}";
            }else{
                tabledata += "{\""+key+"\",\""+value+"\"},";
            }
        }
        tabledata = "["+tabledata+"]";
        return tabledata;
    }

    function tdclick(tdobject){
        var td=$(tdobject);
        td.attr("onclick", "");
        //1,取出当前td中的文本内容保存起来
        var text=td.text();
        //2,清空td里面的内容
        td.html(""); //也可以用td.empty();
        //3，建立一个文本框，也就是input的元素节点
        var input=$("<input>");
        //4，设置文本框的值是保存起来的文本内容
        input.attr("value",text);
        input.bind("blur",function(){
            var inputnode=$(this);
            var inputtext=inputnode.val();
            var tdNode=inputnode.parent();
            tdNode.html(inputtext);
            tdNode.click(tdclick);
            td.attr("onclick", "tdclick(this)");
        });
        input.keyup(function(event){
            var myEvent =event||window.event;
            var kcode=myEvent.keyCode;
            if(kcode==13){
                var inputnode=$(this);
                var inputtext=inputnode.val();
                var tdNode=inputnode.parent();
                tdNode.html(inputtext);
                tdNode.click(tdclick);
            }
        });

        //5，将文本框加入到td中
        td.append(input);
        var t =input.val();
        input.val("").focus().val(t);
        //              input.focus();

        //6,清除点击事件
        td.unbind("click");
    }
    function addtr(){
        var table = $("#para_table");
        var tr= $("<tr>" +
            "<td  onclick='tdclick(this)'>"+"</td>" +
            "<td  onclick='tdclick(this)'>"+"</td>" +
            "<td  align='center' οnclick='deletetr(this)'><button type='button'  class='btn btn-xs btn-link' >"+"删除"+"</button></td></tr>");
        table.append(tr);
    }
    function deletetr(tdobject){
        var td=$(tdobject);
        td.parents("tr").remove();
    }
</script>
{{--新增刪除--}}

<!--判斷運費-->
<script type="text/javascript">
    //<---限額數量判斷-->
    function disable2() {
        if ($("#Quantity-checkbox2").prop('checked')) {
            document.getElementById("discount2").disabled = true;
        }
        else{
            document.getElementById("discount2").disabled = false;
        }
    }
</script>
<script type="text/javascript">
    //<---價格折扣--->
    function disable1() {
        if ($("#Price-checkbox1").prop('checked')) {
            document.getElementById("Freight").disabled = true;
            document.getElementById("Freight-checkbox1").disabled = true;
            document.getElementById("Free-checkbox1").disabled = true;
        } else {
            document.getElementById("Freight").disabled = false;
            document.getElementById("Freight-checkbox1").disabled = false;
            document.getElementById("Free-checkbox1").disabled = false;
        }
    }
</script>
<script type="text/javascript">
    function disable3() {
        //<---免運--->
        if ($("#Freight-checkbox1").prop('checked')) {
            document.getElementById("Free-checkbox1").disabled = true;
        } else {
            document.getElementById("Free-checkbox1").disabled = false;
        }
    }
</script>
<script type="text/javascript">
    function disable() {
        //<---運費折扣--->
        if ($("#Free-checkbox1").prop('checked')) {
            document.getElementById("Freight").disabled = true;
            document.getElementById("Freight-checkbox1").disabled = true;
        }
        else{
            document.getElementById("Freight").disabled = false;
            document.getElementById("Freight-checkbox1").disabled = false;
        }
    }
</script>

<!--    時間日期選擇器-->
<script>
    $(function() {
        $( "#datepicker" ).datepicker();
        $( "#anim" ).change(function() {
            $( "#datepicker" ).datepicker( "option", "showAnim", $( this ).val() );
        });
    });
</script>

<script>
    $(function() {
        $( "#datepicker2" ).datepicker();
        $( "#anim" ).change(function() {
            $( "#datepicker2" ).datepicker( "option", "showAnim", $( this ).val() );
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('input#defaultconfig').maxlength()
        $('input#Price_ceiling').maxlength({
            alwaysShow: true,
        });

        $('textarea#msg').maxlength({
            alwaysShow: true
        });

    });
</script>
<script>
    $('#checkbox1').prop('checked', false);

    // 這樣也可以判斷有沒有選取
    var isCheck = $('#checkbox1').prop('checked');
</script>

<script>
    $(function () {
        $("input[type='button']").click(function () {
            $("input[name='Offer_checkbox1']:checked").each(function () {
                n =$(this),parents("tr").index();
                $("table#bootstrap-data-table-export").find("tr:eq("+n+")").remove();

            })

        })

    })

</script>
