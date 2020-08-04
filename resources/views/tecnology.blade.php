@extends('layout') @section('title', 'Tecnology') @section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="display-5 text-center">Frameworks & Tecnologías</h1>

            <br />

            <h4 class="display-5 text-center">Estas son las tecnologías que hasta el momento me he desempeñado.</h4>

            <br />

            <div class="card-deck">
                <div class="card mb-4 shadow">
                    <div class="view overlay">
                        <img class="card-img-top" src="/img/frontend.svg" />
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <div class="card-body">
                        <h4 class="card-title">Frontend</h4>

                        <p class="card-text">
                            Diseño Web a la medida con las mejores tecnologías del mercado.
                        </p>
                    </div>
                </div>

                <div class="card mb-4 shadow">
                    <div class="view overlay">
                        <img class="card-img-top" src="/img/web-1.svg" />
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <div class="card-body">
                        <br />
                        <h4 class="card-title">Backend</h4>

                        <p class="card-text">
                            Desarrollo del lado del servidor basado en el framework mas popular que es Laravel.
                        </p>
                    </div>
                </div>

                <div class="card mb-4 shadow">
                    <div class="view overlay">
                        <img class="card-img-top" src="/img/git.svg" width="200" height="200" />
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <div class="card-body">
                        <h4 class="card-title">Infraestructura</h4>

                        <p class="card-text">
                            Dominio de Git y GitHub el Control de versiones mas utilizado.
                        </p>
                    </div>
                </div>
            </div>

            <h2 class="display-5 text-center">Frontend</h2>

            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="row cards">
                        <div class="card img-fluid shadow m-4 p-2 rounded" id="card">
                            <img src="/img/tecnologys/angular.svg" class="card-img-top"/>
                            <div class="mask flex-center rgba-red-strong">
                                <p class="white-text text-center">Angular</p>
                            </div>
                            <div class="progress">
							  <div class="progress-bar angular" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
							</div>
                        </div>
                    </div>

                    <div class="row cards">
                        <div class="card img-fluid shadow m-4 p-2 rounded" id="card">
                            <img src="/img/tecnologys/bootstrap.svg" class="card-img-top" />
                            <div class="mask flex-center rgba-red-strong">
                                <p class="white-text text-center">Bootstrap</p>
                            </div>
                            <div class="progress">
							  <div class="progress-bar bootstrap" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
							</div>
                        </div>
                    </div>
                    <div class="row cards">
                        <div class="card img-fluid shadow m-4 p-2 rounded" id="card">
                            <img src="/img/tecnologys/jquery.svg" class="card-img-top" />
                            <div class="mask flex-center rgba-red-strong">
                                <p class="white-text text-center">Jquery</p>
                            </div>
                            <div class="progress">
							  <div class="progress-bar jquery" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
							</div>
                        </div>
                    </div>

                    <div class="row cards">
                        <div class="card img-fluid shadow m-4 p-2 rounded" id="card">
                            <img src="/img/tecnologys/javascript.svg" class="card-img-top" />
                            <div class="mask flex-center rgba-red-strong">
                                <p class="white-text text-center">Javascript</p>
                            </div>
                            <div class="progress">
							  <div class="progress-bar js" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
							</div>
                        </div>
                    </div>

                    <div class="row cards">
                        <div class="card img-fluid shadow m-4 p-2 rounded" id="card">
                            <img src="/img/tecnologys/html5.svg" class="card-img-top" />
                            <div class="mask flex-center rgba-red-strong">
                                <p class="white-text text-center">Html5</p>
                            </div>
                            <div class="progress">
							  <div class="progress-bar html5" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>

            <br />

            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h2 class="display-5 text-center">Backend</h2>

                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div class="row cards">
                                    <div class="card img-fluid shadow m-4 p-2 rounded" id="card">
                                        <img src="/img/tecnologys/php.svg" class="card-img-top" />
                                        <div class="mask flex-center rgba-red-strong">
                                            <p class="white-text text-center">PHP</p>
                                        </div>
                                        <div class="progress">
										  <div class="progress-bar php" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
										</div>
                                    </div>
                                </div>

                                <div class="row cards">
                                    <div class="card img-fluid shadow m-4 p-2 rounded" id="card">
                                        <img src="/img/tecnologys/laravel.svg" class="card-img-top" />
                                        <div class="mask flex-center rgba-red-strong">
                                            <p class="white-text text-center">Laravel</p>
                                        </div>
                                          <div class="progress">
										  <div class="progress-bar laravel" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
										</div>
                                    </div>
                                </div>

                                <div class="row cards">
                                    <div class="card img-fluid shadow m-4 p-2 rounded" id="card">
                                        <img src="/img/tecnologys/wordpress.svg" class="card-img-top" />
                                        <div class="mask flex-center rgba-red-strong">
                                            <p class="white-text text-center">Wordpress</p>
                                        </div>
                                          <div class="progress">
										  <div class="progress-bar wordpress" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-6">
                        <h2 class="display-5 text-center">Bases de Datos</h2>

                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div class="row cards">
                                    <div class="card img-fluid shadow m-4 p-2 rounded" id="card">
                                        <img src="/img/tecnologys/mysql.svg" class="card-img-top" />
                                        <div class="mask flex-center rgba-red-strong">
                                            <p class="white-text text-center">Mysql</p>
                                        </div>
                                        <div class="progress">
										  <div class="progress-bar mysql" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
										</div>
                                    </div>
                                </div>

                                <div class="row cards">
                                    <div class="card img-fluid shadow m-4 p-2 rounded" id="card">
                                        <img src="/img/tecnologys/mongodb.svg" class="card-img-top" />
                                        <div class="mask flex-center rgba-red-strong">
                                            <p class="white-text text-center">Mongo</p>
                                        </div>
                                        <div class="progress">
										  <div class="progress-bar mongo" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
										</div>
                                    </div>
                                </div>

                                <div class="row cards">
                                    <div class="card img-fluid shadow m-4 p-2 rounded" id="card">
                                        <img src="/img/tecnologys/sql.svg" class="card-img-top" />
                                        <div class="mask flex-center rgba-red-strong">
                                            <p class="white-text text-center">Sql Server</p>
                                        </div>
                                        <div class="progress">
										  <div class="progress-bar sql" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
