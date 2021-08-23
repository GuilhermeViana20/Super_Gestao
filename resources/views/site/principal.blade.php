@extends('site.layouts.basico')

    @section('titulo', 'Home')

    @section('conteudo')

        <section class="container py-3">
        
            <div class="row mt-3 mb-3 text-dark py-lg-5">

                <div class="col-md-6 text-dark text-center mt-3">

                    <h1>Sistema Super Gestão</h1>
                        <p>Software para gestão empresarial ideal para sua empresa.<p>
                        <img class="logo_home" src="{{ asset('img/logo.png') }}">
                        <div>
                            <img src="{{ asset('img/check.png') }}">
                            <span class="texto-branco">Gestão completa e descomplicada</span>
                        </div>
                        <div>
                            <img src="{{ asset('img/check.png') }}">
                            <span class="texto-branco">Sua empresa na nuvem</span>
                        </div>
                </div>

                <div class="mt-3 mb-3 col-md-6">
                    
                    @component('site.layouts._components.form_contato')
                    @endcomponent
                    
                </div>

            </div>
        
        </section>

    @endsection