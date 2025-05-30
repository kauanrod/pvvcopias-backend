<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class FinancialRecordController extends Controller {
// GET /financial-records
        public function index() {
            // Listar todos os registros
        }

        // GET /financial-records/create
        public function create() {
            // Mostrar formulário de criação (não muito usado em APIs)
        }

        // POST /financial-records
        public function store(Request $request) {
            // Salvar novo registro no banco
        }

        // GET /financial-records/{id}
        public function show($id) {
            // Mostrar um registro específico
        }

        // GET /financial-records/{id}/edit
        public function edit($id) {
            // Mostrar formulário para edição (não muito usado em APIs)
        }

        // PUT/PATCH /financial-records/{id}
        public function update(Request $request, $id) {
            // Atualizar um registro específico
        }

        // DELETE /financial-records/{id}
        public function destroy($id) {
            // Excluir um registro
        }
    }
