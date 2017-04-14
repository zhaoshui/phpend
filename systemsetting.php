<?php
    include 'header.php'
?>
        <div class="container-fluid">
           <div class="row">
               <div class=" col-md-3"">
                   <div class="panel panel-default">
                       <h4 class="text-center">用户管理</h4>
                       <div id="tree"></div>

                      <button id="new-build" type="button" class="btn btn-primary" data-toggle="modal" data-target="#new-build-modal">
                                                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                                                    新增
                                                                </button>
                                                                <button id="btn-edit" type="button" class="btn btn-primary" data-toggle="modal" data-target="#new-edit-modal">
                                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                                    修改
                                                                </button>
                                                                <button id="btn-deleate" type="button" class="btn btn-danger" data-toggle="modal" data-target="#new-deleate-modal">
                                                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                                    删除
                                                                </button>

                       <script type="text/javascript">
                           $(function () {
                               function getTree() {
                                   // Some logic to retrieve, or generate tree structure


                                   var data = [{
                                       text: "系统管理部",
                                       nodes: [{ text: "系统管理部1", id: '00001', nodeId: '00001' }, { text: "系统管理部2", id: '00002' }, { text: "系统管理部3", id: '00003' }, { text: "系统管理部4", id: '00004', nodes: [{ text: '系统管理部4-1', id: '00005'}]}]

                                   }]
                                   return data;
                               }
                               var obj = {};
                               obj.text = "123";
                               $('#tree').treeview({
                                   data: getTree(),         // data is not optional
                                   levels: 5,
                                   multiSelect: true

                               });

                               $("#btn").click(function (e) {

                                   var arr = $('#tree').treeview('getSelected');

                                   alert(JSON.stringify(arr));
                                   for (var key in arr) {
                                       alert(arr[key].id);
                                   }

                               })

                           })
                          
                       </script>
                   </div>
               </div>
               <div class="col-md-9">
                   <div class="">
                       <!--modal-->
                       <div class="modal fade" id="new-search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                           <div class="modal-dialog">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                           &times;
                                       </button>
                                   </div>
                                   <div class="modal-body">
                                       <form role="form" action="javascript:void(0)">
                                           <div class="form-group">
                                               <input type="text" class="form-control"  placeholder="请输入名称">
                                           </div>
                                           <div class="form-group">
                                               <input type="text" class="form-control"  placeholder="请输入年龄">
                                           </div>
                                       </form>
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-minus"></span> 取消</button>
                                       <button type="button" class="btn btn-primary" ><span class="glyphicon glyphicon-search"></span>  查找</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="modal  fade" id="new-screen-modal" tabindex="-1" role="dialog" aria-hidden="true">
                           <div class="modal-dialog">
                               <div class="modal-content">
                                   <div class="modal-header bg-primary">
                                       <button type="button" class="close text-danger" data-dismiss="modal" aria-hidden="true">
                                           &times;
                                       </button>
                                       <h4 class="modal-title text-center">筛选</h4>
                                   </div>
                                   <div class="modal-body">
                                       <form role="form" action="javascript:void(0)">
                                           <div class="form-group">
                                               <label for="screen-time-start" class="col-sm-6 col-xs-6 control-label  text-right">时间</label>
                                               <div class="col-sm-6 col-xs-6">
                                                   <input class="form-control" type="text" id="screen-time-start">
                                               </div>

                                           </div>
                                           <div class="form-group">
                                               <label for="screen-time-end" class="col-sm-6 col-xs-6 control-label text-right">&#45;&#45;</label>
                                               <div class="col-sm-6 col-xs-6">
                                                   <input class="form-control" type="text" id="screen-time-end">
                                               </div>
                                           </div>
                                           <script type="text/javascript">
                                               $("#screen-time-start").datetimepicker({
                                                   format: 'yyyy-mm-dd hh:ii',
                                                   language: 'zh-CN',
                                                   autoclose:true,
                                               }).on("click",function(){
                                                   $("#screen-time-start").datetimepicker("setEndDate",$("#screen-time-end").val())
                                               });
                                               $("#screen-time-end").datetimepicker({
                                                   format: 'yyyy-mm-dd hh:ii',
                                                   language: 'zh-CN',
                                                   autoclose:true,
                                               }).on("click",function(){
                                                   $("#screen-time-end").datetimepicker("setStartDate",$("#screen-time-end".val()))
                                               });
                                           </script>
                                           <div class="form-group">
                                               <label for="screen-level" class="col-sm-6 col-xs-6 control-label text-right">会员等级</label>
                                               <div class="col-sm-6 col-xs-6">
                                                   <select name="screen-level" id="screen-level" class="form-control">
                                                       <option value=""></option>
                                                       <option value="1">高级会员</option>
                                                       <option value="1">中级会员</option>
                                                       <option value="1">初级会员</option>
                                                       <option value="1">零级会员</option>
                                                   </select>
                                               </div>
                                           </div>
                                           <div class="form-group">
                                               <label for="screen-class" class="col-sm-6 col-xs-6 control-label text-right">客户分类</label>
                                               <div class="col-sm-6 col-xs-6">
                                                   <select name="screen-level" id="screen-class" class="form-control">
                                                       <option value=""></option>
                                                       <option value="1">大客户</option>
                                                       <option value="1">中级客户</option>
                                                       <option value="1">小客户</option>
                                                   </select>
                                               </div>
                                           </div>
                                           <div class="form-group">
                                               <label for="screen-shop" class="col-sm-6 col-xs-6 control-label text-right">购买活跃度</label>
                                               <div class="col-sm-6 col-xs-6">
                                                   <select name="screen-level" id="screen-shop" class="form-control">
                                                       <option value=""></option>
                                                       <option value="1">经常</option>
                                                       <option value="1">偶尔</option>
                                                       <option value="1">很少</option>
                                                   </select>                           </div>
                                           </div>
                                           <div class="form-group">
                                               <label for="screen-country" class="col-sm-6 col-xs-6 control-label text-right">购买力度</label>
                                               <div class="col-sm-6 col-xs-6">
                                                   <select name="screen-level" id="screen-country" class="form-control">
                                                       <option value=""></option>
                                                       <option value="1">万金额</option>
                                                       <option value="1">千金额</option>
                                                       <option value="1">白金额</option>
                                                   </select>                           </div>
                                           </div>
                                           <div class="form-group">
                                               <label for="screen-black" class="col-sm-6 col-xs-6 control-label text-right">是否黑名单</label>
                                               <div class="col-sm-6 col-xs-6">
                                                   <select name="screen-level" id="screen-black" class="form-control">
                                                       <option value=""></option>
                                                       <option value="1">是黑名单</option>
                                                       <option value="1">否黑名单</option>
                                                   </select>
                                               </div>
                                           </div>
                                           <div class="form-group">
                                               <label for="screen-bigcustom" class="col-sm-6 col-xs-6 control-label text-right">是否大客户</label>
                                               <div class="col-sm-6 col-xs-6">
                                                   <select name="screen-level" id="screen-bigcustom" class="form-control">
                                                       <option value=""></option>
                                                       <option value="1">高级会员</option>
                                                       <option value="1">中级会员</option>
                                                       <option value="1">初级会员</option>
                                                       <option value="1">零级会员</option>
                                                   </select>                           </div>
                                           </div>
                                           <div class="form-group">
                                               <label for="screen-buy" class="col-sm-6 col-xs-6 control-label text-right">购买力</label>
                                               <div class="col-sm-6 col-xs-6">
                                                   <select name="screen-level" id="screen-buy" class="form-control">
                                                       <option value=""></option>
                                                       <option value="1">高级会员</option>
                                                       <option value="1">中级会员</option>
                                                       <option value="1">初级会员</option>
                                                       <option value="1">零级会员</option>
                                                   </select>                           </div>
                                           </div>
                                           <div class="form-group">
                                               <label for="screen-price" class="col-sm-6 col-xs-6 control-label text-right">价格敏感</label>
                                               <div class="col-sm-6 col-xs-6">
                                                   <select name="screen-level" id="screen-price" class="form-control">
                                                       <option value=""></option>
                                                       <option value="1">高级会员</option>
                                                       <option value="1">中级会员</option>
                                                       <option value="1">初级会员</option>
                                                       <option value="1">零级会员</option>
                                                   </select>                           </div>
                                           </div>
                                           <div class="form-group">
                                               <label for="screen-custom1" class="col-sm-6 col-xs-6 control-label text-right">自定义1</label>
                                               <div class="col-sm-6 col-xs-6">
                                                   <select name="screen-level" id="screen-custom1" class="form-control">
                                                       <option value=""></option>
                                                       <option value="1">高级会员</option>
                                                       <option value="1">中级会员</option>
                                                       <option value="1">初级会员</option>
                                                       <option value="1">零级会员</option>
                                                   </select>                           </div>
                                           </div>
                                           <div class="form-group">
                                               <label for="screen-custom2" class="col-sm-6 col-xs-6 control-label text-right">自定义2</label>
                                               <div class="col-sm-6 col-xs-6">
                                                   <select name="screen-level" id="screen-custom2" class="form-control">
                                                       <option value=""></option>
                                                       <option value="1">高级会员</option>
                                                       <option value="1">中级会员</option>
                                                       <option value="1">初级会员</option>
                                                       <option value="1">零级会员</option>
                                                   </select>                           </div>
                                           </div>
                                           <div class="form-group">
                                               <label for="screen-custom3" class="col-sm-6 col-xs-6 control-label text-right">自定义3</label>
                                               <div class="col-sm-6 col-xs-6">
                                                   <select name="screen-level" id="screen-custom3" class="form-control">
                                                       <option value=""></option>
                                                       <option value="1">高级会员</option>
                                                       <option value="1">中级会员</option>
                                                       <option value="1">初级会员</option>
                                                       <option value="1">零级会员</option>
                                                   </select>                           </div>
                                           </div>
                                       </form>
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-minus"></span> 取消</button>
                                       <button type="button" class="btn btn-primary"  data-dismiss="modal"> <span class="glyphicon glyphicon-screenshot"></span> 筛选</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="modal fade" id="new-build-modal" tabindex="-1" role="dialog" aria-hidden="true">
                           <div class="modal-dialog">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                           &times;
                                       </button>
                                       <h4 class="modal-title">新增新的一个</h4>
                                   </div>
                                   <div class="modal-body">
                                       <form role="form" action="javascript:void(0)">
                                           <div class="form-group">
                                               <input type="text" class="form-control"  placeholder="请输入名称">
                                           </div>
                                           <div class="form-group">
                                               <input type="text" class="form-control"  placeholder="请输入年龄">
                                           </div>
                                       </form>
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-minus"></span> 取消</button>
                                       <button type="button" class="btn btn-primary"  data-dismiss="modal"><span class="glyphicon glyphicon-ok"></span>  提交</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="modal fade" id="new-edit-modal" tabindex="-1" role="dialog" aria-hidden="true">
                           <div class="modal-dialog">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                           &times;
                                       </button>
                                   </div>
                                   <div class="modal-body">
                                       <form role="form" action="javascript:void(0)">
                                           <div class="form-group">
                                               <input type="text" class="form-control"  placeholder="请输入名称">
                                           </div>
                                           <div class="form-group">
                                               <input type="text" class="form-control"  placeholder="请输入年龄">
                                           </div>
                                       </form>
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-minus"></span> 取消</button>
                                       <button type="button" class="btn btn-primary" data-dismiss="modal" ><span class="glyphicon glyphicon-edit"></span>  修改</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="modal fade" id="new-deleate-modal" tabindex="-1" role="dialog" aria-hidden="true">
                           <div class="modal-dialog">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                           &times;
                                       </button>
                                   </div>
                                   <div class="modal-body">
                                       <form role="form" action="javascript:void(0)">
                                           <h3>确定要删除该信息？</h3>
                                       </form>
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-minus"></span> 取消</button>
                                       <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn-delate"><span class="glyphicon glyphicon-ok"></span>  删除</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="modal fade" id="new-sms-modal" tabindex="-1" role="dialog" aria-hidden="true">
                           <div class="modal-dialog">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                           &times;
                                       </button>
                                   </div>
                                   <div class="modal-body">
                                       <form role="form" action="javascript:void(0)">
                                           <h3>请选择要接收短信的用户会员</h3>
                                       </form>
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-minus"></span> 取消</button>
                                       <button type="button" class="btn btn-primary"  data-dismiss="modal"><span class="glyphicon glyphicon-send"></span>  短信发送</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="modal fade" id="new-blacklist-modal" tabindex="-1" role="dialog" aria-hidden="true">
                           <div class="modal-dialog">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                           &times;
                                       </button>
                                   </div>
                                   <div class="modal-body">
                                       <form role="form" action="javascript:void(0)">
                                           <h3>加入黑名单？</h3>
                                       </form>
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-minus"></span> 取消</button>
                                       <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-ok"></span>  确定</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="modal fade" id="new-keyaccount-modal" tabindex="-1" role="dialog" aria-hidden="true">
                           <div class="modal-dialog">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                           &times;
                                       </button>
                                   </div>
                                   <div class="modal-body">
                                       <form role="form" action="javascript:void(0)">
                                           <h3>您确定要把选定的会员转为大客户？</h3>
                                       </form>
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-minus"></span> 取消</button>
                                       <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-ok"></span>  确定</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!--表格 -->
                       <div>
                           <div class="panel panel-default">
                               <div class="panel-body">
                                   <div id="toolbar">
                                       <div class="btn-group">

                                           <button id="new-screen" type="button" class="btn btn-primary hidden" data-toggle="modal" data-target="#new-screen-modal">
                                               <span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span>
                                               筛选
                                           </button>
                                           <button id="new-search" type="button" class="btn btn-primary hidden" data-toggle="modal" data-target="#new-search-modal">
                                               <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                               查找
                                           </button>
                                           <button id="new-build" type="button" class="btn btn-primary" data-toggle="modal" data-target="#new-build-modal">
                                               <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                               新增
                                           </button>
                                           <button id="btn-edit" type="button" class="btn btn-primary" data-toggle="modal" data-target="#new-edit-modal">
                                               <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                               修改
                                           </button>
                                           <button id="btn-deleate" type="button" class="btn btn-danger" data-toggle="modal" data-target="#new-deleate-modal">
                                               <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                               删除
                                           </button>
                                           <!--<button id="btn-sms" type="button" class="btn btn-info" data-toggle="modal" data-target="#new-sms-modal">
                                               <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                                               发短信
                                           </button>-->
                                           <!--<button type="button" class="btn btn-warning">
                                               <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                                               黑名单
                                           </button>-->

                                       </div>
                                       <div class="btn-group">
                                           <button id="btn-sms" type="button" class="btn btn-info" data-toggle="modal" data-target="#new-sms-modal">
                                               <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                                               发短信
                                           </button>
                                       </div>
                                       <div class="btn-group">
                                           <button type="button" class="btn btn-danger"  id="btn-blacklist" data-toggle="modal" data-target="#new-blacklist-modal" >
                                               <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                                               黑名单添加
                                           </button>
                                           <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                               <span class="caret"></span>
                                               <span class="sr-only">Toggle Dropdown</span>
                                           </button>
                                           <ul class="dropdown-menu">
                                               <li><a href="#">黑名单管理</a></li>
                                               <li><a href="#">白名单管理</a></li>
                                           </ul>
                                       </div>
                                       <div class="btn-group">
                                           <button type="button" class="btn btn-danger"  id="btn-keyaccount" data-toggle="modal" data-target="#new-keyaccount-modal" >
                                               <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
                                               是大客户
                                           </button>
                                           <!--<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                               <span class="caret"></span>
                                               <span class="sr-only">Toggle Dropdown</span>
                                           </button>
                                           <ul class="dropdown-menu">
                                               <li><a href="#">黑名单管理</a></li>
                                               <li><a href="#">白名单管理</a></li>
                                           </ul>-->
                                       </div>
                                   </div>
                                   <table class="table-responsive" id="memberinfo-table1"
                                          data-toolbar="#toolbar"
                                          data-search="true"
                                          data-show-refresh="true"
                                          data-show-toggle="true"
                                          data-show-columns="true"
                                          data-striped="true"
                                          data-show-export="true"
                                          data-detail-view="true"
                                          data-detail-formatter="detailFormatter"
                                          data-minimum-count-columns="2"
                                          data-show-pagination-switch="true"
                                          data-id-field="id"
                                          data-pagination="true"
                                          data-smart-display="false"
                                          data-pagination-pre-text="上一页"
                                          data-pagination-next-text="下一页"
                                          data-page-number="1"
                                          data-page-list="[5,10,15,20,25,30]"
                                          data-side-pagination="client"
                                          data-url="data.json"
                                          data-response-handler="responseHandler">
                                   </table>
                                   <script>
                                       var $table = $('#memberinfo-table1'),
                                           $remove = $('#btn-delate')
                                       selections = [];

                                       function initTable() {
                                           $table.bootstrapTable({
                                               columns: [
                                                  /* [
                                                      , {
                                                       title: '会员信息',
                                                       colspan: 10,
                                                       align: 'center'
                                                   }
                                                   ],*/
                                                   [
                                                       {field: 'state',
                                                           checkbox: true,
                                                           /*rowspan: 2,*/
                                                           align: 'center',
                                                           valign: 'middle'
                                                       }, {
                                                       title: '序号',
                                                       field: 'id',
                                                       /*rowspan: 2,*/
                                                       align: 'center',
                                                       valign: 'middle',
                                                       sortable: true,
                                                       footerFormatter: totalTextFormatter
                                                   },{
                                                           field: 'user_id',
                                                           title: '网名/ID',
                                                           sortable: true,
                                                           editable: true,
                                                           footerFormatter: totalNameFormatter,
                                                           align: 'center'
                                                       }, {
                                                       field: 'user_name',
                                                       title: '姓名',
                                                       sortable: true,
                                                       align: 'center',
                                                       editable: {
                                                           type: 'text',
                                                           title: '姓名/名称',
                                                           validate: function (value) {
                                                               value = $.trim(value);
                                                               if (!value) {
                                                                   return 'This field is required';
                                                               }
                                                               if (!/^\$/.test(value)) {
                                                                   return 'This field needs to start width $.'
                                                               }
                                                               var data = $table.bootstrapTable('getData'),
                                                                   index = $(this).parents('tr').data('index');
                                                               console.log(data[index]);
                                                               return '';
                                                           }
                                                       },
                                                       footerFormatter: totalPriceFormatter
                                                   }, {
                                                       field: 'user_province',
                                                       title: '性别',
                                                       align: 'center',
                                                       sortable: true,
                                                       editable: true,
                                                       events: operateEvents,
                                                       footerFormatter: totalPriceFormatter
                                                   }, {
                                                       field: 'user_city',
                                                       title: '部门',
                                                       align: 'center',
                                                       sortable: true,
                                                       editable: true,
                                                       events: operateEvents,
                                                       footerFormatter: totalPriceFormatter
                                                   }, {
                                                       field: 'user_mobile',
                                                       title: '手机/电话',
                                                       align: 'center',
                                                       sortable: true,
                                                       editable: true,
                                                       events: operateEvents,
                                                       footerFormatter: totalPriceFormatter
                                                   }, {
                                                       field: 'user_level',
                                                       title: '职务',
                                                       align: 'center',
                                                       sortable: true,
                                                       editable: true,
                                                       events: operateEvents,
                                                       footerFormatter: totalPriceFormatter
                                                   }, {
                                                       field: 'user_times',
                                                       title: '出生日期',
                                                       align: 'center',
                                                       sortable: true,
                                                       editable: true,
                                                       events: operateEvents,
                                                       footerFormatter: totalPriceFormatter
                                                   }, {
                                                       field: 'user_amount',
                                                       title: '入职日期',
                                                       align: 'center',
                                                       sortable: true,
                                                       editable: true,
                                                       events: operateEvents,
                                                       footerFormatter: totalPriceFormatter
                                                   }, {
                                                       field: 'user_lastconsum',
                                                       title: '离职日期',
                                                       align: 'center',
                                                       sortable: true,
                                                       editable: true,
                                                       events: operateEvents,
                                                       footerFormatter: totalPriceFormatter
                                                   }, {
                                                       field: 'user_lasttime',
                                                       title: '其他信息',
                                                       align: 'center',
                                                       sortable: true,
                                                       editable: true,
                                                       events: operateEvents,
                                                       //formatter: operateFormatter
                                                       footerFormatter: totalPriceFormatter
                                                   }

                                                   ]
                                               ]
                                           });
                                           // sometimes footer render error.
                                           setTimeout(function () {
                                               $table.bootstrapTable('resetView');
                                           }, 200);
                                           $table.on('check.bs.table uncheck.bs.table ' +
                                               'check-all.bs.table uncheck-all.bs.table', function () {
                                               $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);

                                               // save your data, here just save the current page
                                               selections = getIdSelections();
                                               // push or splice the selections if you want to save all data selections
                                           });
                                           $table.on('expand-row.bs.table', function (e, index, row, $detail) {
                                               if (index % 2 == 1) {
                                                   $detail.html('Loading from ajax request...');
                                                   $.get('LICENSE', function (res) {
                                                       $detail.html(res.replace(/\n/g, '<br>'));
                                                   });
                                               }
                                           });
                                           $table.bootstrapTable('getRowByUniqueId', 1);
                                           $table.on('all.bs.table', function (e, name, args) {
                                               //console.log(name, args);
                                           });
                                           $remove.click(function () {
                                               var ids = getIdSelections();
                                               $table.bootstrapTable('remove', {
                                                   field: 'id',
                                                   values: ids
                                               });
                                               // $remove.prop('disabled', true);
                                           });
                                           $(window).resize(function () {
                                               $table.bootstrapTable('resetView', {
                                                   height: getHeight()
                                               });
                                           });
                                       }

                                       function getIdSelections() {
                                           return $.map($table.bootstrapTable('getSelections'), function (row) {
                                               return row.id
                                           });
                                       }

                                       function responseHandler(res) {
                                           $.each(res.rows, function (i, row) {
                                               row.state = $.inArray(row.id, selections) !== -1;
                                           });
                                           return res;
                                       }

                                       function detailFormatter(index, row) {
                                           var html = [];
                                           $.each(row, function (key, value) {
                                               html.push('<p><b>' + key + ':</b> ' + value + '</p>');
                                           });
                                           return html.join('');
                                       }

                                       function operateFormatter(value, row, index) {
                                           return [
                                               '<a class="like" href="javascript:void(0)" title="Like">',
                                               '<i class="glyphicon glyphicon-heart"></i>',
                                               '</a>  ',
                                               '<a class="remove" href="javascript:void(0)" title="Remove">',
                                               '<i class="glyphicon glyphicon-remove"></i>',
                                               '</a>'
                                           ].join('');
                                       }

                                       window.operateEvents = {
                                           'click .like': function (e, value, row, index) {
                                               alert('You click like action, row: ' + JSON.stringify(row));
                                           },
                                           'click .remove': function (e, value, row, index) {
                                               $table.bootstrapTable('remove', {
                                                   field: 'id',
                                                   values: [row.id]
                                               });
                                           }
                                       };

                                       function totalTextFormatter(data) {
                                           return 'Total';
                                       }

                                       function totalNameFormatter(data) {
                                           return data.length;
                                       }

                                       function totalPriceFormatter(data) {
                                           var total = 0;
                                           $.each(data, function (i, row) {
                                               total += +(row.price.substring(1));
                                           });
                                           return '$' + total;
                                       }

                                       function getHeight() {
                                           return $(window).height() - $('h1').outerHeight(true);
                                       }

                                       $(function () {
                                           var scripts = [
                                                   location.search.substring(1) || 'js/bootstrap-table.js',
                                                   'js/bootstrap-table-export.js',
                                                   'js/tableExport.js',
                                                   'js/bootstrap-table-editable.js',
                                                   'js/bootstrap-editable.js',
                                                   'js/bootstrap-table-zh-CN.min.js'
                                               ],
                                               eachSeries = function (arr, iterator, callback) {
                                                   callback = callback || function () {};
                                                   if (!arr.length) {
                                                       return callback();
                                                   }
                                                   var completed = 0;
                                                   var iterate = function () {
                                                       iterator(arr[completed], function (err) {
                                                           if (err) {
                                                               callback(err);
                                                               callback = function () {};
                                                           }
                                                           else {
                                                               completed += 1;
                                                               if (completed >= arr.length) {
                                                                   callback(null);
                                                               }
                                                               else {
                                                                   iterate();
                                                               }
                                                           }
                                                       });
                                                   };
                                                   iterate();
                                               };

                                           eachSeries(scripts, getScript, initTable);
                                       });

                                       function getScript(url, callback) {
                                           var head = document.getElementsByTagName('head')[0];
                                           var script = document.createElement('script');
                                           script.src = url;

                                           var done = false;
                                           // Attach handlers for all browsers
                                           script.onload = script.onreadystatechange = function() {
                                               if (!done && (!this.readyState ||
                                                   this.readyState == 'loaded' || this.readyState == 'complete')) {
                                                   done = true;
                                                   if (callback)
                                                       callback();

                                                   // Handle memory leak in IE
                                                   script.onload = script.onreadystatechange = null;
                                               }
                                           };

                                           head.appendChild(script);

                                           // We handle everything using the script element injection
                                           return undefined;
                                       }
                                   </script>

                          
                                   </div>
                               </div>


                           </div>
                       </div>
                   </div>
               </div>
           </div>
        </div>

<?php
    include 'footer.php'
?>