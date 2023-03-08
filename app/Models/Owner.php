<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
      use HasFactory;

      protected $table = 'srg_pessoa';

      protected $fillable = [
            'nome',
            'codigo',
            'datahora_cadastro',
            'data_nascimento',
            'sexo',
            'estado_civil',
            'telefone',
            'celular',
            'whatsapp',
            'fax',
            'email',
            'email_cobranca',
            'login',
            'senha',
            'datahora_ultimo_login',
            'observacoes',
            'tipo_pessoa',
            'cpf',
            'rg',
            'cidade_nascimento',
            'conjuge_nome',
            'escolaridade',
            'profissao',
            'cnpj',
            'contato',
            'endereco_atualizado',
            'inscricao_estadual',
            'inscricao_municipal',
            'credenciado_data_inscricao',
            'credenciado_crmv',
            'credenciado_crea',
            'credenciado_area_atuacao',
            'credenciado_data_baixa',
            'associado_data_inscricao',
            'associado_tipo_afixo',
            'associado_afixo',
            'associado_preposicao',
            'associado_data_baixa',
            'associado_numero_inscricao_produtor_rural',
            'data_ultima_atualizacao_cadastral',
      ];

      

      public function getAdress()
      {
            return $this->hasOne(Endereco::class, 'pessoa', 'id');
      }
}
