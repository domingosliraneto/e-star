<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>BuscaTCC</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="estart/css/style.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../../Public/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="../../../Public/bower_components/AdminLTE/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../../../Public/bower_components/AdminLTE/dist/css/skins/_all-skins.min.css">

</head>

<body class="hold-transition skin-blue sidebar-mini">

<div class="container-fluid"><!--Conteudo-->


  <div class="content"><!-- Contém o conteúdo da página -->
    
    <section class="content-header"><!-- cabeçalho de conteúdo (cabeçalho da página) -->
     <div class="box"><!-- Inicio do conteudo da tabela de notificações  -->
     <div class="box-header "><!-- Inicio cabeçalho -->
      <h1 class="box-title">
        TCC  
      </h1><!-- Fim do cabeçalho -->
      
      <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            
          </div>

        </div><!-- Fim do cabeçalho -->
        
      <br>
      <br>

    
              <div class="container"> <!-- Inicio da busca -->
                <form class="form-horizontal" id="search-form" >  
                            
                      <div class=col-md-10> 
                        <div class=input-group> 
                            <div class=input-group-btn> 
                              

                                <button type=button class="btn btn-default dropdown-toggle" data-toggle=dropdown aria-haspopup=true aria-expanded=false> 
                                  Tipo <span class=caret></span> 
                                    <span class=sr-only>Toggle Dropdown</span> 
                                </button> 

                                <ul class=dropdown-menu>
                                  <li><a href="#">Título</a></li>
                                  <li><a href="#">Status do TCC</a></li> 
                                  <li><a href="#">Orientador</a></li> 
                                  <li><a href="#">Aluno1</a></li> 
                                  <li><a href="#">Aluno2</a></li> 
                                  <li><a href="#">Linha de Pesquisa</a></li> 
                                  <li><a href="#">Data</a></li>
                                </ul>

                            </div> 

                           <input id="Search-field" class=form-control aria-label="Text input with segmented button dropdown">

                        </div> 
                      </div>

                        <button class="btn btn-default" type="submit">
                          <i class="fa fa-search"></i>
                        </button>
                        
                </form>
              </div><!-- Fim da busca -->


               <br>
               <br>

                    

        <div class="box-body no-padding"><!-- Inicio da tabela  -->

          <table class="table table-bordered table-hover table-responsive">

          <thead>
            <tr><!-- LinhaTitulo  -->
              <th style="width: 80px">Título</th>
              <th style="width: 40px">Status do TCC</th><!-- Coluna  -->
              <th style="width: 40px">Orientador</th>
              <th style="width: 40px">Aluno1</th>
              <th style="width: 40px">Aluno2</th>    
              <th style="width: 40px">Linha de Pesquisa</th>  
              <th style="width: 20px">Data</th>
              <th style="width: 100px">Ações</th>              
            </tr>
          </thead>

            <tr><!-- Linha01  -->     
              <td>Ipsum</td>       
              <td>Lorem Ipsum</td>
              <td>André Lorem Ipsum Lorem Ipsum</td>
              <td>Felipe Lorem Ipsum</td>
              <td>Fernando Lorem Ipsum</td>
              <td>Ipsum</td>
              <td>22/09/2019</td>
              <td>
                  <a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModalTCC"> Visualizar </a>
                  <a href="#" class="btn btn-warning btn-xs"><i class="label label-warning"></i> Editar </a>

                  <a href="#" class="btn btn-danger btn-xs" > Excluir </a>
              </td>
            </tr>

            

            <tr><!-- Linha02  --> 
             <td>Ipsum</td>       
              <td>Lorem Ipsum</td>
              <td>André</td>
              <td>Felipe</td>
              <td>Fernando</td>
              <td>Ipsum</td>
              <td>22/09/2019</td>
              <td>
                  <a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModalTCC"> Visualizar </a>
                  <a href="#" class="btn btn-warning btn-xs"><i class="label label-warning"></i> Editar </a>

                  <a href="#" class="btn btn-danger btn-xs" > Excluir </a>
                  
              </td>
            </tr>

          </table>

        </div><!-- Fim da tabela  -->

      
      </div><!-- Fim do conteudo da tabela de notificações  -->

    </section><!-- Fim da seção -->
    
  </div><!-- Fim do conteúdo da página -->
  


</div><!--Fim do Conteudo-->



    <!-- Modal Vizualisar TCC-->
    <div class="modal fade" id="myModalTCC" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">TCC</h4>
          </div>
          <div class="modal-body">
            ...
          </div>
          
        </div>
      </div>
    </div> <!--Fim da Modal Vizualisar TCC-->




<script src="../../../Public/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>

<script src="../../../Public/bower_components/AdminLTE/dist/js/app.min.js"></script>

<script>
var type;
$(".dropdown-menu li a").click(function(e){
    type = $(this).text();

    $(this).parents('.input-group').find('.dropdown-toggle').html(type+' <span class="caret"></span>');       
});

  $('#search-form').on('submit', function(){
                    var Searchfield = document.getElementById('Search-field').value;

                    var dataString = $("#search-form").serialize();
                    dataString += '&Searchfield='+Searchfield+'&type='+type;
                    alert(dataString);

                    //ajaxPostRedirect(dataString,"createquiz.php","questionadmin.php");
        

        return false;
    }); 

</script>

</body>
</html>