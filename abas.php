<?php include ('_header.php'); ?>

<div class="bg-cinza container-fluid">
  
  <div class="row" id="bloco-site">
      
    <div class="col mov-menu" id="bg-menu">

       <?php include ('_menu.php'); ?>

      </div><!-- /col  // Menu lateral (DESKTOP) -->

      <div class="col-md-10" id="geral-conteudo">
        <!-- MIOLO DE PÃO -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="inicial.php"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item"><a href="#">Proposta de Ação</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastro</li>
          </ol>
        </nav>
        <!-- MIOLO DE PÃO -->


 
      <section class="sessao-conteudo">
           <h1 class="titulo">
             Proposta de Ação

            </h1>
         

          
          <div class="row">

            <div class="col-sm-12">
              <div class="row">
                  <nav class="col-md-3" id="aba-form">
                    
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-tab-1" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true">Dados da Ação</a>
                        <a class="nav-item nav-link" id="nav-tab-2" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="false">Demandas Fiscalizatórias</a>
                        <a class="nav-item nav-link" id="nav-tab-3" data-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-3" aria-selected="false">Unidades Jurisdicionadas</a>
                        <a class="nav-item nav-link" id="nav-tab-4" data-toggle="tab" href="#nav-4" role="tab" aria-controls="nav-4" aria-selected="false">Critérios de Seletividade</a>
                        <a class="nav-item nav-link" id="nav-tab-5" data-toggle="tab" href="#nav-5" role="tab" aria-controls="nav-5" aria-selected="false">Comunicação</a>
                        <a class="nav-item nav-link" id="nav-tab-6" data-toggle="tab" href="#nav-6" role="tab" aria-controls="nav-6" aria-selected="false">Calendário de Execução</a>
                        <a class="nav-item nav-link" id="nav-tab-7" data-toggle="tab" href="#nav-7" role="tab" aria-controls="nav-7" aria-selected="false">Equipe</a>
                      </div>
                    
                  </nav>
                <div class="col-md-9">

           <!-- <div id="content-2" class="contentScroll mCustomScrollbar">-->
                <form id="FormCadastro" action="#" method="get" >
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-tab-1">
                       
                       <div class="container">

                          <div class="row">
                            <div class="col-sm-12">
                              <h3 class="titulos-forms">Dados da Ação</h3>
                              <p class="right-form" style="margin-top: 10px">(*) Campos Obrigatórios</p>
                            </div>
                          </div><!--.row-->

                        <div class="row">
                          <div class="col-sm-12">
                            <label for="tituloproposta">Título da Proposta * <span class="clr">[Resolução 017/2016 / Art. 5°][RITCE / Seção II][NBASP 100/22-23][NBASP 100/26]</span></label>
                            <input type="text" id="tituloproposta" name="tituloproposta" class="form-control " >
                          </div>
                        </div><!--.row-->

                        <div class="row">
                          <div class="col-md-6 col-sm-12">
                            <label for="situacaoproposta">Dimensão da Proposta * <span class="clr">[Resolução 017/2016 / Art. 11]</span></label>
                               <select id="situacaoproposta" name="situacaoproposta" class="form-control ">
                                <option disabled selected>Selecione</option>
                                <option value="Seleção 01">Seleção 02</option>
                                <option value="Seleção 02">Seleção 02</option>
                                <option value="Seleção 03">Seleção 03</option>
                              </select>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <label for="situacaoproposta">Situação da Proposta</label>
                               <select id="situacaoproposta" name="situacaoproposta" class="form-control ">
                                <option disabled selected>Selecione</option>
                                <option value="Seleção 01">Seleção 02</option>
                                <option value="Seleção 02">Seleção 02</option>
                                <option value="Seleção 03">Seleção 03</option>
                              </select>
                          </div>
                        </div><!--.row-->

                        <div class="row">
                          <div class="col-sm-12">
                               <label for="tituloproposta">Objetivo da Ação * <span class="clr">[NBASP 100/17-21]</span></label>
                                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                        </div><!--.row-->

                        <div class="row">
                        <div class="col-md-6 col-sm-12">
                          <label for="situacaoproposta">Unidade Técnica <span class="clr"> [Resolução 017/2016 / Art. 6°][NBASP 100/25]</span></label>
                             <select id="situacaoproposta" name="situacaoproposta" class="form-control ">
                              <option disabled selected>Selecione</option>
                              <option value="Seleção 01">Seleção 02</option>
                              <option value="Seleção 02">Seleção 02</option>
                              <option value="Seleção 03">Seleção 03</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <label for="situacaoproposta">Tipo de Trabalho * <span class="clr">[NBASP 100/27-29]</span></label>
                             <select id="situacaoproposta" name="situacaoproposta" class="form-control ">
                              <option disabled selected>Selecione</option>
                              <option value="Seleção 01">Seleção 02</option>
                              <option value="Seleção 02">Seleção 02</option>
                              <option value="Seleção 03">Seleção 03</option>
                            </select>
                        </div>
                      </div><!--.row-->

                      <div class="row">
                          <div class="col-sm-12">
                               <label for="tituloproposta">Usuários Previstos <span class="clr">[NBASP 100/25]</span></label>
                                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                        </div><!--.row-->

                        <div class="row">

                          <div class="col-sm-12">
                             <!-- <button id="ant" class=" btn btn-sm btn-primary">Anterior</button>-->

                             <button class="proxbt btn btn-sm btn-primary">Próximo</button>

                          </div>

                        </div><!--.row-->

                      </div><!--.container-->
                    </div><!--.fim-tabs-->
                    

                    <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-tab-2">
                       <div class="container">

                          <div class="row">
                            <div class="col-sm-12">
                              <h3 class="titulos-forms">Demandas Fiscalizatórias</h3>
                              
                            </div>
                          </div><!--.row-->

                        <div class="row">
                          <div class="col-sm-10">
                            <label for="tituloproposta">Selecione:</label>
                            <select id="situacaoproposta" name="situacaoproposta" class="form-control ">
                              <option disabled selected>Selecione</option>
                              <option value="Seleção 01">Seleção 02</option>
                              <option value="Seleção 02">Seleção 02</option>
                              <option value="Seleção 03">Seleção 03</option>
                            </select>
                          </div>
                          <div class="col-sm-2">
                            <div class="botoes-de-envio para-filtro">
                                  <button class="btn btn-sm btn-primary">Adcionar</button>
                            </div>
                          </div>
                        </div><!--.row-->
                        
                        <div class="row">
                          <div class="col-sm-12">
                             <div class="bloco-tabela-dados">
                              <form id="3" action="" method="POST">
                                  <table cellspacing="0"  class="table">
                                     <thead>
                                        <tr>
                                           <th>#</th>
                                           <th>Descrição</th>
                                           <th>Jurisdicionado</th>
                                           <th>Processo</th>
                                           <th>Priorização Automática</th>
                                          
                                        </tr>
                                     </thead>
                                     <tbody>
                                       <tr>
                                           <td>1</td>
                                           <td>Acompanhamento da gestão fiscal</td>
                                           <td>TRIBUNAL DE CONTAS DO ESTADO</td>
                                           <td>-</td>
                                           <td>SIM</td>
                                        </tr>
                                        <tr>
                                           <td>1</td>
                                           <td>Acompanhamento da gestão fiscal</td>
                                           <td>TRIBUNAL DE CONTAS DO ESTADO</td>
                                           <td>-</td>
                                           <td>SIM</td>
                                        </tr>
                                        <tr>
                                           <td>1</td>
                                           <td>Acompanhamento da gestão fiscal</td>
                                           <td>TRIBUNAL DE CONTAS DO ESTADO</td>
                                           <td>-</td>
                                           <td>SIM</td>
                                        </tr>
                                        <tr>
                                           <td>1</td>
                                           <td>Acompanhamento da gestão fiscal</td>
                                           <td>TRIBUNAL DE CONTAS DO ESTADO</td>
                                           <td>-</td>
                                           <td>SIM</td>
                                        </tr>
                                        <tr>
                                           <td>1</td>
                                           <td>Acompanhamento da gestão fiscal</td>
                                           <td>TRIBUNAL DE CONTAS DO ESTADO</td>
                                           <td>-</td>
                                           <td>SIM</td>
                                        </tr>
                                        <tr>
                                           <td>1</td>
                                           <td>Acompanhamento da gestão fiscal</td>
                                           <td>TRIBUNAL DE CONTAS DO ESTADO</td>
                                           <td>-</td>
                                           <td>SIM</td>
                                        </tr>
                                        <tr>
                                           <td>1</td>
                                           <td>Acompanhamento da gestão fiscal</td>
                                           <td>TRIBUNAL DE CONTAS DO ESTADO</td>
                                           <td>-</td>
                                           <td>SIM</td>
                                        </tr>
                                        
                                      </tbody>
                                    </table>
                                </form>
                               </div> 
                            </div>
                        </div><!--.row-->
                        

                        <div class="row">

                          <div class="col-sm-12">
                             <button class="antbt btn btn-sm btn-primary">Anterior</button>

                             <button class="proxbt btn btn-sm btn-primary">Próximo</button>

                          </div>

                        </div><!--.row-->

                      </div><!--.container-->

                    </div><!--.fim-tabs-->

                    <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-tab-3">
                      

<div class="container">

                          <div class="row">
                            <div class="col-sm-12">
                              <h3 class="titulos-forms">Unidade Jurisdicionada</h3>
                            <p class="right-form" style="margin-top: 10px">[NBASP 100/25]</p>
                            </div>
                          </div><!--.row-->

                        <div class="row">
                          <div class="col-sm-10">
                            <label for="tituloproposta">Unidade Jurisdicionada:</label>
                            <select id="situacaoproposta" name="situacaoproposta" class="form-control ">
                              <option disabled selected>Selecione</option>
                              <option value="Seleção 01">Seleção 02</option>
                              <option value="Seleção 02">Seleção 02</option>
                              <option value="Seleção 03">Seleção 03</option>
                            </select>
                          </div>
                          <div class="col-sm-2">
                            <div class="botoes-de-envio para-filtro">
                                  <button class="btn btn-sm btn-primary">Adcionar</button>
                            </div>
                          </div>
                        </div><!--.row-->
                        
                        <div class="row">
                          <div class="col-sm-12">
                             <div class="bloco-tabela-dados">
                              <form id="3" action="" method="POST">
                                  <table cellspacing="0"  class="table">
                                     <thead>
                                        <tr>
                                           <th>#</th>
                                           <th>Unidade Jurisdicionada</th>
                                           <th>Ação</th>
                                          
                                          
                                        </tr>
                                     </thead>
                                     <tbody>
                                       <tr>
                                           <td>1</td>
                                           <td>Governo do Estado</td>
                                           <td>-</td>
                                  
                                        </tr>
                                        <tr>
                                           <td>1</td>
                                           <td>Governo do Estado</td>
                                           <td>-</td>
                                          
                                        </tr>
                                        <tr>
                                           <td>1</td>
                                           <td>Governo do Estado</td>
                                           <td>-</td>
                                           
                                        </tr>
                                       
                                        
                                      </tbody>
                                    </table>
                                </form>
                               </div> 
                            </div>
                        </div><!--.row-->



                         <div class="row">
                          <div class="col-sm-10">
                            <label for="tituloproposta">Grupo de Unidade Jurisdicionada: </label>
                            <select id="situacaoproposta" name="situacaoproposta" class="form-control ">
                              <option disabled selected>Selecione</option>
                              <option value="Seleção 01">Seleção 02</option>
                              <option value="Seleção 02">Seleção 02</option>
                              <option value="Seleção 03">Seleção 03</option>
                            </select>
                          </div>
                          <div class="col-sm-2">
                            <div class="botoes-de-envio para-filtro">
                                  <button class="btn btn-sm btn-primary">Adcionar</button>
                            </div>
                          </div>
                        </div><!--.row-->
                        
                        <div class="row">
                          <div class="col-sm-12">
                             <div class="bloco-tabela-dados">
                              <form id="3" action="" method="POST">
                                  <table cellspacing="0"  class="table">
                                     <thead>
                                        <tr>
                                           <th>#</th>
                                           <th>Unidade Jurisdicionada</th>
                                           <th>Ação</th>
                                          
                                          
                                        </tr>
                                     </thead>
                                     <tbody>
                                       <tr>
                                           <td>1</td>
                                           <td>Governo do Estado</td>
                                           <td>-</td>
                                  
                                        </tr>
                                        <tr>
                                           <td>1</td>
                                           <td>Governo do Estado</td>
                                           <td>-</td>
                                          
                                        </tr>
                                        <tr>
                                           <td>1</td>
                                           <td>Governo do Estado</td>
                                           <td>-</td>
                                           
                                        </tr>
                                       
                                        
                                      </tbody>
                                    </table>
                                </form>
                               </div> 
                            </div>
                        </div><!--.row-->
                        

                        <div class="row">

                          <div class="col-sm-12">
                             <button class="antbt btn btn-sm btn-primary">Anterior</button>

                             <button class="proxbt btn btn-sm btn-primary">Próximo</button>

                          </div>

                        </div><!--.row-->

                      </div><!--.container-->




                        </div><!--.fim-tabs-->

                       <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-tab-4">
                          
                          <div class="container">
                             <div class="row">
                                <div class="col-sm-12">
                                  <h3 class="titulos-forms">Critérios de Seletividade</h3>
                                <p class="right-form" style="margin-top: 10px">[NBASP 12/Princípio 5][Resolução 017/2016 / Art. 2°]</p>
                                </div>
                              </div><!--.row-->

                              <div class="row">
                                <div class="col-sm-12">
                                     <label for="tituloproposta">Risco</label>
                                       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                              </div><!--.row-->

                              <div class="row">
                                <div class="col-sm-12">
                                     <label for="tituloproposta">Materialidade</label>
                                       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                              </div><!--.row-->


                              <div class="row">
                                <div class="col-sm-12">
                                     <label for="tituloproposta">Relevância</label>
                                       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                              </div><!--.row-->

                              <div class="row">
                                <div class="col-sm-12">
                                     <label for="tituloproposta">Agregação de Valor</label>
                                       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                              </div><!--.row-->
                              
                              
                              <fieldset>
                                <legend>Priorização Automática</legend>
  
                               <div class="row">
                                  <div class="col-sm-10">
                                    <label for="tituloproposta">Tipo </label>
                                    <select id="situacaoproposta" name="situacaoproposta" class="form-control ">
                                      <option disabled selected>Selecione</option>
                                      <option value="Seleção 01">Seleção 02</option>
                                      <option value="Seleção 02">Seleção 02</option>
                                      <option value="Seleção 03">Seleção 03</option>
                                    </select>
                                  </div>
                                  <div class="col-sm-2">
                                    <div class="botoes-de-envio para-filtro">
                                          <button class="btn btn-sm btn-primary">Adcionar</button>
                                    </div>
                                  </div>
                                </div><!--.row-->

                              <div class="row">
                                <div class="col-sm-12">
                                     <label for="tituloproposta">Descrição</label>
                                       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                              </div><!--.row-->

                              

                               <div class="row">
                                    <div class="col-sm-12">
                                       <div class="bloco-tabela-dados">
                                        <form id="3" action="" method="POST">
                                            <table cellspacing="0"  class="table">
                                               <thead>
                                                  <tr>
                                                     <th>#</th>
                                                     <th>Tipo de Priorização</th>
                                                     <th>Priorização</th>
                                                    <th>Ação</th>
                                                    
                                                  </tr>
                                               </thead>
                                               <tbody>
                                                 <tr>
                                                     <td>1</td>
                                                     <td>Governo do Estado</td>
                                                     <td>-</td>
                                                     <td>-</td>
                                            
                                                  </tr>
                                                  <tr>
                                                     <td>1</td>
                                                     <td>Governo do Estado</td>
                                                     <td>-</td>
                                                     <td>-</td>
                                                    
                                                  </tr>
                                                  <tr>
                                                     <td>1</td>
                                                     <td>Governo do Estado</td>
                                                     <td>-</td>
                                                     <td>-</td>
                                                  </tr>
                                                 
                                                  
                                                </tbody>
                                              </table>
                                          </form>
                                         </div> 
                                      </div>
                                  </div><!--.row-->

                              </fieldset>

                              <div class="row">

                                <div class="col-sm-12">
                                   <button class="antbt btn btn-sm btn-primary">Anterior</button>

                                   <button class="proxbt btn btn-sm btn-primary">Próximo</button>

                                </div>

                               </div><!--.row-->
                          </div><!--.container-->


                        </div><!--.fim-tabs-->

                        <div class="tab-pane fade" id="nav-5" role="tabpanel" aria-labelledby="nav-tab-5">
                            
                            <div class="container">
                             <div class="row">
                                <div class="col-sm-12">
                                  <h3 class="titulos-forms">Comunicação</h3>
                                <p class="right-form" style="margin-top: 10px">[NBASP 20/Princípio 7 e 8][NBASP 100/43]</p>
                                </div>
                              </div><!--.row-->
                              
                              <div class="row">
                                <div class="col-sm-12">
                                     <label for="tituloproposta">Mecanismos </label>
                                       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                              </div><!--.row-->

                              <div class="row">
                                <div class="col-sm-12">
                                     <label for="tituloproposta">Destinatários </label>
                                       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                              </div><!--.row-->


                              <div class="row">
                                <div class="col-sm-12">
                                     <label for="tituloproposta">Mecanismos </label>
                                       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                              </div><!--.row-->

                              <div class="row">
                                <div class="col-sm-12">
                                  <label for="tituloproposta">Estágio da ação</label>
                                  <select id="situacaoproposta" name="situacaoproposta" class="form-control ">
                                    <option disabled selected>Selecione</option>
                                    <option value="Seleção 01">Seleção 02</option>
                                    <option value="Seleção 02">Seleção 02</option>
                                    <option value="Seleção 03">Seleção 03</option>
                                  </select>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="botoes-de-envio ">
                                        <button class="btn btn-sm btn-primary">Adcionar</button>
                                  </div>
                                </div>
                              </div><!--.row-->


                              <div class="row">
                                    <div class="col-sm-12">
                                       <div class="bloco-tabela-dados">
                                        <form id="3" action="" method="POST">
                                            <table cellspacing="0"  class="table">
                                               <thead>
                                                  <tr>
                                                     <th>#</th>
                                                     <th>Estágio da Ação</th>
                                                     <th>Destinatários</th>
                                                    <th>Mecanismos  </th>
                                                    <th>Ação  </th>
                                                  </tr>
                                               </thead>
                                               <tbody>
                                                 <tr>
                                                     <td>1</td>
                                                     <td>Governo do Estado</td>
                                                     <td>-</td>
                                                     <td>-</td>
                                                     <td>-</td>
                                            
                                                  </tr>
                                                  <tr>
                                                     <td>1</td>
                                                     <td>Governo do Estado</td>
                                                     <td>-</td>
                                                     <td>-</td>
                                                     <td>-</td>
                                                    
                                                  </tr>
                                                  <tr>
                                                     <td>1</td>
                                                     <td>Governo do Estado</td>
                                                     <td>-</td>
                                                     <td>-</td>
                                                     <td>-</td>
                                                  </tr>
                                                 
                                                  
                                                </tbody>
                                              </table>
                                          </form>
                                         </div> 
                                      </div>
                                  </div><!--.row-->

                              <div class="row">

                                  <div class="col-sm-12">
                                     <button class="antbt btn btn-sm btn-primary">Anterior</button>

                                     <button class="proxbt btn btn-sm btn-primary">Próximo</button>

                                  </div>

                                </div><!--.row-->
                          </div><!--.container-->

                        </div><!--.fim-tabs-->

                        <div class="tab-pane fade" id="nav-6" role="tabpanel" aria-labelledby="nav-tab-6">
                          
                          <div class="container">
                             <div class="row">
                                <div class="col-sm-12">
                                  <h3 class="titulos-forms">Calendário de Execução</h3>
                                <p class="right-form" style="margin-top: 10px">[NBASP 100/48]</p>
                                </div>
                              </div><!--.row-->


                              <div class="row">
                                 <div class="col-sm-12 col-md-3">
                                   <label for="tituloproposta">Estágio da ação</label>
                                     <input type="text" id="datainicio" name="datainicio"  class="datainicio form-control " />
                                  </div>

                                  <div class="col-sm-12 col-md-3">
                                     <label for="tituloproposta">Estágio da ação</label>
                                     <input type="text" id="datafinal" name="datafinal" class="datafim form-control " />
                                  </div>

                                <div class="col-sm-12 col-md-4">
                                  <label for="tituloproposta">Tipo de Etapa</label>
                                  <select id="situacaoproposta" name="situacaoproposta" class="form-control ">
                                    <option disabled selected>Selecione</option>
                                    <option value="Seleção 01">Seleção 02</option>
                                    <option value="Seleção 02">Seleção 02</option>
                                    <option value="Seleção 03">Seleção 03</option>
                                  </select>
                                </div>
                             
                                <div class="col-sm-2 col-md-2">
                                  <div class="botoes-de-envio  para-filtro">
                                        <button class="btn btn-sm btn-primary">Adcionar</button>
                                  </div>
                                </div>
                              </div><!--.row-->


                               <div class="row">
                                    <div class="col-sm-12">
                                       <div class="bloco-tabela-dados">
                                        <form id="3" action="" method="POST">
                                            <table cellspacing="0"  class="table">
                                               <thead>
                                                  <tr>
                                                     <th>#</th>
                                                     <th>Etapa</th>
                                                     <th>Data de Início</th>
                                                    <th>Data de Término  </th>
                                                    <th>Dias uteis  </th>
                                                   
                                                  </tr>
                                               </thead>
                                               <tbody>
                                                 <tr>
                                                     <td>1</td>
                                                     <td>Governo do Estado</td>
                                                     <td>-</td>
                                                     <td>-</td>
                                                     <td>-</td>
                                                     
                                            
                                                  </tr>
                                                  <tr>
                                                     <td>1</td>
                                                     <td>Governo do Estado</td>
                                                     <td>-</td>
                                                     <td>-</td>
                                                     <td>-</td>
                                                     
                                                    
                                                  </tr>
                                                  <tr>
                                                     <td colspan="4"><strong>Total de dias uteis</strong></td>
                                                   
                                                     <td>0</td>
                                                  </tr>
                                                 
                                                  
                                                </tbody>
                                              </table>
                                          </form>
                                         </div> 
                                      </div>
                                  </div><!--.row-->


                              <div class="row">

                                <div class="col-sm-12">
                                   <button class="antbt btn btn-sm btn-primary">Anterior</button>

                                   <button class="proxbt btn btn-sm btn-primary">Próximo</button>

                                </div>

                              </div><!--.row-->


                          </div><!--.container-->


                        </div><!--.fim-tabs-->

                        <div class="tab-pane fade" id="nav-7" role="tabpanel" aria-labelledby="nav-tab-7">
                            
                            <div class="container">
                             <div class="row">
                                <div class="col-sm-12">
                                  <h3 class="titulos-forms">Composição da Equipe e Habilidades Necessárias</h3>
                                <p class="right-form" style="margin-top: 10px">[NBASP 100/25][NBASP 100/39][NBASP 100/48]</p>
                                </div>
                              </div><!--.row-->

                              <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                      <label class="form-check-label" for="exampleCheck1">Equipe com Membro Intersetorial</label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                      <label class="form-check-label" for="exampleCheck1">Calcular dias a partir do calendário de Execução</label>
                                    </div>
                                </div>

                              </div><!--.row-->

                              <div class="row">
                                
                                <div class="col-md-6 col-sm-12">
                                     <label for="tituloproposta">Servidor</label>
                                      <select id="situacaoproposta" name="situacaoproposta" class="form-control ">
                                        <option disabled selected>Selecione</option>
                                        <option value="Seleção 01">Seleção 02</option>
                                        <option value="Seleção 02">Seleção 02</option>
                                        <option value="Seleção 03">Seleção 03</option>
                                      </select>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                      <label for="tituloproposta">Função</label>
                                      <select id="situacaoproposta" name="situacaoproposta" class="form-control ">
                                        <option disabled selected>Selecione</option>
                                        <option value="Seleção 01">Seleção 02</option>
                                        <option value="Seleção 02">Seleção 02</option>
                                        <option value="Seleção 03">Seleção 03</option>
                                      </select>
                                </div>

                              </div><!--.row-->

                              <div class="row">
                                <div class="col-sm-12">
                                     <label for="tituloproposta">Capacitação requerida </label>
                                       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                              </div><!--.row-->
                                  

                                <fieldset>
                                    <legend>Previsão de Esforço</legend>

                                    <div class="row">
                                        <div class="col-sm-12 col-md-3">
                                             <label for="tituloproposta">Percentual de Esforço</label>
                                              <input type="text" id="tituloproposta" name="tituloproposta" class="form-control " >
                                        </div>

                                        <div class="col-sm-12 col-md-3">
                                            <label for="tituloproposta">Dias alocados na ação</label>
                                              <input type="text" id="tituloproposta" name="tituloproposta" class="form-control " >
                                        </div>

                                        <div class="col-sm-12 col-md-3">
                                          <label for="tituloproposta">carga horária ajustada</label>
                                              <input type="text" id="tituloproposta" name="tituloproposta" class="form-control " >
                                        </div>

                                        <div class="col-sm-12 col-md-2">
                                          <label for="tituloproposta">previsão de esforço </label>
                                              <input type="text" id="tituloproposta" name="tituloproposta" class="form-control " >
                                        </div>

                                        <div class="col-sm-12 col-md-1">
                                            <label for="tituloproposta">saldo</label>
                                              <input type="text" id="tituloproposta" name="tituloproposta" class="form-control " >
                                        </div>


                                    </div>
                                </fieldset>

                              <div class="row">
                                    <div class="col-sm-12">
                                       <div class="bloco-tabela-dados">
                                        <form id="3" action="" method="POST">
                                            <table cellspacing="0"  class="table">
                                               <thead>
                                                  <tr>
                                                     <th>#</th>
                                                     <th>Servidor</th>
                                                     <th>Cargo</th>
                                                    <th>Função </th>
                                                    <th>Capacidade Requerida</th>
                                                    <th>Revisão de Esforço (h)</th>
                                                    <th>Ação</th>
                                                  </tr>
                                               </thead>
                                               <tbody>
                                                 <tr>
                                                     <td>1</td>
                                                     <td>Governo do Estado</td>
                                                     <td>-</td>
                                                     <td>-</td>
                                                     <td>-</td>
                                                     <td>-</td>
                                                     <td>-</td>
                                                     
                                            
                                                  </tr>
                                                  <tr>
                                                     <td>1</td>
                                                     <td>Governo do Estado</td>
                                                     <td>-</td>
                                                     <td>-</td>
                                                     <td>-</td>
                                                     <td>-</td>
                                                     <td>-</td>
                                                     
                                                    
                                                  </tr>
                                            
                                                  
                                                </tbody>
                                              </table>
                                          </form>
                                         </div> 
                                      </div>
                                  </div><!--.row-->


                                <div class="row">

                                <div class="col-sm-12">
                                   <button class="antbt btn btn-sm btn-primary">Anterior</button>

                                   <button class="btn btn-sm btn-primary">Salvar</button>

                                </div>

                              </div><!--.row-->


                          </div><!--.container-->


                        </div><!--.fim-tabs-->

                  </div>
                </form>
          <!--</div> -->
              


            </div>

          </div>
           
        </div>


    </div>
       

 </section>      
      </div><!--.col-md-10 GERAL DO MIOLO-->


  </div><!-- /row  GERAL DO MIOLO-->

</div><!-- /container-fluid // Engloba todo o conteudo do projeto menos o topo-->
          

<?php include ('_footer.php'); ?>

<script type="text/javascript">





// numero de tabs geradas
//$numTabs = $("#nav-tab a").length

// função do botão próximo
$(".proxbt").click(function(){  

  // aba que esta ativa no momento
  $currentTab = parseInt($("#nav-tab a.active").attr("id").replace(/\D/g,''));
 
  // se for a ultima, nao deixa mudar
  // caso contrário, vai pra prox
 
    $("#nav-tab-" + ($currentTab + 1)).click();


  
})

// função do botão anterior
$(".antbt").click(function(){  
  // aba que esta ativa no momento
  $currentTab = parseInt($("#nav-tab a.active").attr("id").replace(/\D/g,''));
  
  // se for a primeira, nao deixa mudar
  // caso contrário, vai pra anterior
 
    $("#nav-tab-" + ($currentTab - 1)).click();
  
})




    $.validator.setDefaults( {
      submitHandler: function () {
        Swal.fire({
          title: 'Sucesso!',
          text: 'Seu cadastro foi atualizado.',
          type: 'success',
          confirmButtonText: 'Fechar'
        })
      }
    } );

    $( document ).ready( function () {
      $( "#signupForm" ).validate( {
        rules: {
          firstname: "required",
         
          
          
          email: {
            required: true,
            email: true
          },
         
        },
        messages: {
          firstname: "Digite seu nome completo",
         
          
          
          email: "Digite um e-mail valido"
        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
          // Add the `invalid-feedback` class to the error element
          error.addClass( "invalid-feedback" );

          if ( element.prop( "type" ) === "checkbox" ) {
            error.insertAfter( element.next( "label" ) );
          } else {
            error.insertAfter( element );
          }
        },
        highlight: function ( element, errorClass, validClass ) {
          $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
        },
        unhighlight: function (element, errorClass, validClass) {
          $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
        }
      } );

    } );
  </script>

         