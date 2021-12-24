<!-- ACTUA -->
<footer id="actua" class="d-flex justify-content-center mt-3 pt-3 grey-background">
    <div class="container-fluid row d-flex align-items-center">
        <!-- actua header -->
        <div class="card-body text-center px-5 pt-2 blockquote row d-flex flex-column">
            <h2 class="card-title cyan-color col-md-4 m-auto p-1">Sumate</h2>
            <p class="card-text  pt-4 col-md-8 m-auto"> <em>Los niños necesitan campeones. Participa, alza la voz, hazte voluntario o donante y otorga a cada niño una oportunidad justa para tener éxito.</em></p>
        </div>

        <!-- actua main -->
        <div class="container container-footer">
                <!-- gráfico -->
            <div class="container-footer-chart h-100 mb-3">
                <div id="chartdiv">
                </div>
            </div>
            <div class="container-footer-data">
                <div class="card-body">
                    <div class="row row-cols-2">
                        <p class="card-text col-md-6 w-auto fs-6"> <b>Total de donaciones:</b> </p>
                        <div class="numero card-text fs-6" id="numero">${{ number_format($totales['totalDonations'], 2, ',', '.') }}
                        </div>
                    </div>
                    <div class="row row-cols-2 ">
                        <p class="card-text col-md-6 w-auto fs-6"><b> Objetivo del 2022:</b></p>
                        <span class="card-text fs-6">$16.000.000,00</span>
                    </div>
                    <div class="row row-cols-2">
                        <p class="card-text col-md-6 w-auto fs-6"><b> Falta recaudar:</b></p>
                        <span class="card-text fs-6">
                            ${{ number_format(16000000-$totales['totalDonations'], 2, ',', '.') }}
                            <!-- ACA HABRÍA QUE IMPLEMENTAR LA RESTA -->
                        </span>
                    </div>
                    <div class="pt-3">
                        <h3 class="card-title">Tu aporte salva vidas</h3>
                        <p class="card-text">Con $50 por día colaborás para incorporar alimentos nutritivos en la vianda de 4 chicas o chicos durante un mes.</p>
                        <div class="d-flex justify-content-center">
                            <button class="w-25">Doná</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
