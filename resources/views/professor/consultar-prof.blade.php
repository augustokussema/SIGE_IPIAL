@extends('layouts.main')

@section('title', 'Consultar Professores')

@section('conteudo')
<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">
            <div class="col-md-9 col-lg-3 mb-2">
                <h1 class="text-uppercase">Professores</h1>      
            </div>
        
            <div class="col-md-3 col-lg-2 mb-2">
                <select class="btn-sel form-select">
                    <optgroup label="Estado">
                        <option value="D.P">Activo</option>
                        <option value="T.E.I.E">Inactivo</option>
                    </optgroup>
                </select>
            </div> 

            <div class="col-md-12 col-lg-4 mb-2">
                <select class="btn-sel form-select">
                    <optgroup label="Curso">
                        <option value="D.P">Desenhador projectista - D.P</option>
                        <option value="T.E.I.E">Técnico de Energia e Instalações Eléctricas - T.E.I.E</option>
                        <option value="T.I">Técnico de Informática - T.I</option>
                        <option value="E.T">Electrônica e Telecomunicação - E.T</option>
                    </optgroup>
                </select>
            </div> 

            <div class="col-md-12 col-lg-3">
                <select class="btn-sel form-select">
                    <optgroup label="Disciplina">
                        <option>Educação Física</option>
                        <option>Electrotecnia</option>
                        <option>Empreendedorismo</option>
                        <option>Física</option>
                        <option>Formação de Atitudes Integradoras</option>
                        <option>Língua Portuguesa</option>
                        <option>Língua Estrangeira</option>
                        <option>Geometria Descritiva</option>
                        <option>Matemática</option>
                        <option>Máquinas Eléctricas</option>
                        <option>Organização e Gestão Industrial</option>
                        <option>Práticas Oficinais</option>
                        <option>Projecto Tecnológico</option>
                        <option>Química</option>
                        <option>Sistemas de Exploração e Arquitectura de Computadores</option>
                        <option>Técnicas e Linguagens de Programação</option>
                        <option>Técnicas de Reparação de Equipamentos Informáticos</option>
                        <option>Tecnologias de Informação e Comunicação</option>
                    </optgroup>
                </select>
            </div> 
        </div>
    </div>

    <div class="procurar row">
        <div class="col-lg-12">
        <form class="proc-form d-flex align-items-center">
            <input type="search" placeholder="Digite o nome do professor" name="" class="campo-pesq">
            <button type="submit" title="Search"><i class="bi bi-search bg-blue-principal btn-search w-100"></i></button>   
        </form>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <!-- /  Inicio da tabela de inscritos -->
            <table class="table table-striped" style="margin-top: 20px;">
            <thead>
                <tr>
                    <th scope="col-lg-2">Nº do Bilhete</th>
                    <th scope="col-lg-2">Nome do professor</th>
                    <th scope="col-lg-2">Curso</th>
                    <th scope="col-lg-2">Turno</th>
                    <th scope="col-lg-2">Disciplina(s)</th>
                    <th scope="col-lg-2"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">0000000KJ000098</th>
                    <td>Sungo Afonso</td>
                    <td>Informática</td>
                    <td>Tarde</td>
                    <td>TLP</td>
                    <td>
                        <a href="/editar-dados-professor" class="btn btn-cor-sg-a w-48">Visualizar</a>
                        <a href="#" class="btn btn-cor-sg-a w-48 bg-red">Inactivar</a>
                    </td>
                </tr>
                
                <tr>
                <th scope="row">0000000KJ000098</th>
                    <td>Sivi Lando</td>
                    <td>Informática</td>
                    <td>Noite</td>
                    <td>TLP</td>
                    <td>
                        <a href="#" class="btn btn-cor-sg-a w-48">Ver inscrição</a>
                        <a href="#" class="btn btn-cor-sg-a w-48 bg-green">Activar</a>
                    </td>
                </tr>
            </tbody>
            </table>
            <!-- Termina a tabela de inscritos -->
        </div>
    </div>
</main>
@endsection