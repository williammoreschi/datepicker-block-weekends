<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Datepicker</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>

  
    var dateToday = new Date(<?=date('Y');?>, <?=date('m');?> - 1, <?=date('d');?> + 2);

    /*Datas de Feriados.*/
    var disabledDates = ['01/01/2016', '02/08/2016', '02/09/2016', '03/08/2016', '03/25/2016']; 

    $(function() {
      $( "#datepicker" ).datepicker({
        minDate: dateToday,
        beforeShowDay: noWeekendsOrHolidays,
        showOn: "button",
        buttonImage: "https://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
        buttonImageOnly: true,
        buttonText: "Selecione uma data.",
        dateFormat: 'dd/mm/yy',
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
        nextText: 'Próximo',
        prevText: 'Anterior'
      });
    });

    function noWeekendsOrHolidays(date) { 
      var noWeekend = $.datepicker.noWeekends(date); 
      if (noWeekend[0]) { 
        return disableDays(date); 
      } else { 
        return noWeekend; 
      } 
    } 

    function disableDays(date) { 
      for (var i = 0; i < disabledDates.length; i++) { 
        if (new Date(disabledDates[i]).toString() == date.toString()) {              
          return [false]; 
        } 
      } 
      return [true]; 
    }  

  </script>
</head>
<body>
<p>Date: <input type="text" name="campo_data_entrega" readonly id="datepicker" /></p>

  </body>
</html>