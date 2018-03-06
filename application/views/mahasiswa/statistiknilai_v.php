
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-12">
                    <h2>Statistik Nilai Mahasiswa</h2><br >
                    <div class="table-responsive col-xs-4">
                    <table border="0">
                      <tbody>
                        <tr>
                          <td width="130px;">NIM</td>
                          <td width="7px;">: </td>
                          <td>123456789</td>
                        </tr>
                        <tr>
                          <td width="130px;">Nama</td>
                          <td width="7px;">:</td>
                          <td>ABDUL KARIM</td>
                        </tr>
                        <tr>
                          <td width="130px;">Program Studi</td>
                          <td width="7px;">:</td>
                          <td>S1 Teknik Informatika</td>
                        </tr>
                        <tr>
                          <td width="130px;">IPK</td>
                          <td width="7px;">:</td>
                          <td><b style="color:blue;">3.99</td>
                        </tr>
                        <tr>
                          <td width="130px;">SKS Total</td>
                          <td width="7px;">:</td>
                          <td>128</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                </div>

            <style media="screen">
                .color3{
                  color: #8be0be;
                }
                .color4{
                  color: #ffa982;
                }
            </style>

            </div>
            <div class="wrapper wrapper-content">
            <div class="row">
              <div class="ibox-content col-lg-12">
                <div class="row"><br >
                  <div class="col-sm-2">
                    <label class="control-label">Tahun Ajaran</label>
                      <select class="form-control m-b" name="account">
                        <option selected disabled>All</option>
                        <option>1617</option>
                        <option>1617</option>
                        <option>1718</option>
                      </select>
                  </div>
                  <div class="col-sm-2">
                    <label class="control-label">Semester</label>
                      <select class="form-control m-b" name="account">
                        <option selected disabled>All</option>
                        <option>Genap</option>
                        <option>Ganjil</option>
                      </select>
                  </div>
              </div>
                <div id="chartContainer" style="height: 300px; width: 100%;"></div>
              </div>
            </div>
          </div><br ><br >

          <script>
            window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
            	exportEnabled: true,
            	animationEnabled: true,
            	title:{
            		text: "Statistik Nilai Indeks"
            	},
            	legend:{
            		cursor: "pointer",
            		itemclick: explodePie
            	},
            	data: [{
            		type: "pie",
            		showInLegend: true,
            		toolTipContent: "{name}: <strong>{y}%</strong>",
            		indexLabel: "{name} - {y}%",
            		dataPoints: [
            			{ y: 26, name: "A", exploded: true },
            			{ y: 20, name: "AB" },
            			{ y: 5, name: "B" },
            			{ y: 3, name: "BC" },
            			{ y: 7, name: "C" },
            			{ y: 17, name: "D" },
            			{ y: 22, name: "E"},
                  { y: 4, name: "T"},
                  { y: 1, name: "Kosong"}
            		]
            	}]
            });
            chart.render();
            }

            function explodePie (e) {
            	if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
            		e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
            	} else {
            		e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
            	}
            	e.chart.render();

            }
          </script>
