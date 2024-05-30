
function createCalendar(elem, year, month, day) {

    let mon = month - 1; 
    let d = new Date(year, mon);
    
    //cadena = '<br><br> Hoy es: '+day+'-'+month+'-'+year+'<br><br>';
    cadena1 = ' <p> Hoy es: '+day+'-'+month+'-'+year+' </p>';
    //let table = cadena + '<table id="table"><tr><th>MO</th><th>TU</th><th>WE</th><th>TH</th><th>FR</th><th>SA</th><th>SU</th></tr><tr>';
    let meses = {
      '01': 'Enero',
      '02': 'Febrero',
      '03': 'Marzo',
      '04': 'Abril',
      '05': 'Mayo',
      '06': 'Junio',
      '07': 'Julio',
      '08': 'Agosto',
      '09': 'Septiembre',
      '10': 'Octubre',
      '11': 'Noviembre',
      '12': 'Diciembre'
    };
    cadena = meses[month];
    console.log(cadena1);
    
    let table =  '<table id="table" class="table-bordered"> <tr> <th colspan="7" style="text-align:center;">' + cadena + '</th> </tr> ' +'<tr><th>LU</th><th>MA</th><th>MI</th><th>JU</th><th>VI</th><th>SA</th><th>DO</th></tr><tr>';

    // espacios en la primera línea
    for (let i = 0; i < getDay(d); i++) {
      table += '<td></td>';
    }

    // días
    while (d.getMonth() == mon) {
      table += '<td>' + d.getDate() + '</td>';
      if (getDay(d) % 7 == 6) {
        table += '</tr><tr>';
      }
      d.setDate(d.getDate() + 1);
    }

    // espacios de después 
    if (getDay(d) != 0) {
      for (let i = getDay(d); i < 7; i++) {
        table += '<td></td>';
      }
    }

    // cerrar la tabla
    table += '</tr></table>';
    table2 = "";

    for (let $i = 1; $i <= 31; $i++) {
        if ($i==day) {
          table2 = table.replace("<td>"+$i+"</td>", "<td><input id='dia' type=\"button\" style=\"background-color:black;color:white\" value=\""+$i+"\" onClick=\"cambiarDia(this.value)\"></td>");   
        }else {
          table2 = table.replace("<td>"+$i+"</td>", "<td><input id='dia' type=\"button\" value=\""+$i+"\" onClick=\"cambiarDia(this.value)\"></td>");
        } 
        table=table2;
    }
    
    elem.innerHTML = table2;
  }





  function getDay(date) { //número de día
    let day = date.getDay();
    if (day == 0) day = 7;
    return day - 1;
  }
  
  function cambiarDia(num){
        // cambiamos el valor de fecha en curso
        var $fecha=document.getElementById("fechaEnCurso").value;
        //alert ("la antigua fecha es: "+ $fecha);  

     
        $annioActual=$fecha.substring(0,4);
        $mesActual=$fecha.substring(5,7);


        $diaActual=num;
        if ($diaActual.length==1) {
          $diaActual="0"+$diaActual;
        }
        //alert (num);
        
        $fec= $annioActual + "-"+ $mesActual + "-" + $diaActual
        //alert ("la fecha seleccionada es "+ $fec)      
        document.getElementById("fechaEnCurso").value = $fec;
        //alert ($fec);
        
        document.retorno.submit();

	  }

    function saltar(pagina){
        document.formularioCitasPrincipal.action=pagina;
    	document.formularioCitasPrincipal.submit();
    }    

    var $fecha=document.getElementById("fechaEnCurso").value;
    //console.log($fec);
    var $annioActual=""
    var $mesActual=""

    $annioActual=$fecha.substring(0,4);
    $mesActual=$fecha.substring(5,7);  
    $diaActual=$fecha.substring(8,10);   
    console.log("hola");
    console.log($diaActual);

    createCalendar(calendar, $annioActual, $mesActual, $diaActual);
    


