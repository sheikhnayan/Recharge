@extends('front.layout.courier')
@section('content')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mt-3">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-list" style="margin-right: 10px;"></i>
                  <strong>Invoice List</strong>
                </h3>
              </div>
              <!-- /.card-header -->

              <div class="p-3">
                <div class="date_picker_pair mb-3">
                  <label for="inputSearchDate" class="form-label">Search By Date</label>
                  <input type="text" class="form-control" name="daterange" id="inputSearchDate" value="01/01/2018 - 01/15/2018">
                  <!-- <input type="text" name="daterange" value="01/01/2018 - 01/15/2018" /> -->
                </div>
                <div class="form-group offer_select_option">
                  <label for="exampleSelect">Tipo Ricarica</label>
                  <select class="custom-select" id="exampleSelect">
                    <option>Select Ricarica</option>
                    <option value="offer_table_one">Recharge International</option>
                    <option value="offer_table_two">Recharge Domestic</option>
                    <option value="offer_table_two">Gift Card</option>
                    <option value="offer_table_two">Calling Card</option>
                  </select>
                </div>
                <div class="converter_section mt-5">
                  <div class="converter_btn-1">
                    <button type="button" class="btn btn-info btn-sm">Copy</button>
                    <button type="button" class="btn btn-info btn-sm">Exel</button>
                    <button type="button" class="btn btn-info btn-sm">CSV</button>
                    <button type="button" class="btn btn-info btn-sm">PDF</button>
                  </div>
                  <div class="converter_search-1">
                    <div class="card-tools">
                      <div class="input-group input-group-sm">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="agent_amount_table">
                  <table class="table table-sm table-bordered">
                    <thead class="table-danger">
                      <tr>
                        <th>Totale</th>
                        <th>Agent</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="bg-sky">
                        <td>2966.99 &euro;</td>
                        <td>36.7374 &euro;</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="converter_section mt-5">
                  <div class="converter_btn-1">
                    <button type="button" class="btn btn-info btn-sm">Copy</button>
                    <button type="button" class="btn btn-info btn-sm">Exel</button>
                    <button type="button" class="btn btn-info btn-sm">CSV</button>
                    <button type="button" class="btn btn-info btn-sm">PDF</button>
                  </div>
                  <div class="converter_search-1">
                    <div class="card-tools">
                      <div class="input-group input-group-sm">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="recharge_input_table table-responsive p-0" style="height: 550px;">
                  <table class="table table-sm table-bordered table-hover table-head-fixed text-nowrap">
                    <thead>
                      <tr>
                        <th style="background: #faaeae;">Requestld</th>
                        <th style="background: #faaeae;">Numero</th>
                        <th style="background: #faaeae;">Importo</th>
                        <th style="background: #faaeae;">Data</th>
                        <th style="background: #faaeae;">Provv agent</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="bg-ocean">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-sky">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-ocean">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-sky">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-ocean">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-sky">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-ocean">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-sky">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-ocean">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-sky">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-ocean">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-sky">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-ocean">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-sky">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-ocean">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                      <tr class="bg-sky">
                        <td>
                          <a type="button" href="recharge_invoice.html">
                            <i class="fas fa-print"></i>
                          </a>
                          MBLSNAIRPIN_1627670629.8667
                        </td>
                        <td></td>
                        <td>11.99 &euro;</td>
                        <td>30-07-2021 20:43:49</td>
                        <td>0.831 &euro;</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection