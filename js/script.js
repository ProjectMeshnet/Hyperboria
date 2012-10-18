jQuery("#list2").jqGrid({
   	url:'./nodes/index.php?q=2',
	datatype: "json",
   	colNames:['address','dns', 'last seen'],
   	colModel:[
   		{name:'address',index:'id', width:55},
   		{name:'dns',index:'invdate', width:90},
   		{name:'last seen',index:'name asc, invdate', width:100}		
   	],
   	rowNum:10,
   	rowList:[10,20,30],
   	pager: '#pager2',
   	sortname: 'id',
    viewrecords: true,
    sortorder: "desc",
    caption:"JSON Example"
});
jQuery("#list2").jqGrid('navGrid','#pager2',{edit:false,add:false,del:false});