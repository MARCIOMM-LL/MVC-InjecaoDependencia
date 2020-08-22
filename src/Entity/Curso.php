<?php

namespace Alura\Cursos\Entity;

/**
 * @Entity
 * @Table(name="cursos")
 */
class Curso implements  \JsonSerializable //A contra barra no início da interface serve para dizer que a interface se encontra em um namespace global
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;
    /**
     * @Column(type="string")
     */
    private $descricao;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    //A função jsonSerialize() php, serve para informar
    //que essa classe é serializavel em json
    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'descricao' => $this->descricao
        ];
    }
}
