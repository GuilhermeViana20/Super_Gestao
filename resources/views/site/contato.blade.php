@extends('site.layouts.basico')

    @section('titulo', 'Contato')

    @section('conteudo')
        
        <div class="container py-3">
    
            <div class="row mt-3 mb-3 text-dark py-lg-5">
                
                <legend class="pt-3 pb-3 text-center rounded titulo-page">ENTRE EM CONTATO CONOSCO</legend>
                
                <div class="col-md-6">
                    
                    <div class="col-md-12 p-3 text-center">
                        <img class="marketing-icon" src="{{ asset('img/alvo.png') }}">
                    </div>

                </div>
                
                <div class="mt-3 mb-3 col-md-6">
                    
                    @component('site.layouts._components.form_contato')
                        {{-- <div class="alert alert-success text-center" role="alert">
                            Obrigado! Em breve entraremos em contato.
                        </div> --}}
                    @endcomponent
                    
                </div>
            
            </div>
        </div>

    @endsection