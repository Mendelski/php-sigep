<?php
namespace PhpSigep;

/**
 * @author: Stavarengo
 */
abstract class DefaultStdClass
{

    protected $_failIfAtributeNotExiste = true;

    public function __construct(array $initialValues = [])
    {
        $this->setFromArray($initialValues);
    }

    /**
     * @param string $attributeName
     * @param $value
     * @throws InvalidArgument
     */
    public function set(string $attributeName, $value): void
    {
        $method = 'set' . ucfirst($attributeName);
        if (is_callable(array($this, $method))) {
            $this->$method($value);

            return;
        }

        if ($this->_failIfAtributeNotExiste) {
            throw new InvalidArgument('Não existe um método para definir o valor do atributo "'
                . get_class($this) . '::' . $attributeName . '"');
        }

        $this->$attributeName = $value;
    }

    /**
     * @param $attributeName
     * @throws InvalidArgument
     * @return mixed
     */
    public function get($attributeName)
    {
        $method = 'get' . ucfirst($attributeName);
        if (is_callable([$this, $method])) {
            return $this->$method();
        }
        $method = 'is' . ucfirst($attributeName);
        if (is_callable([$this, $method])) {
            return $this->$method();
        }

        if ($this->_failIfAtributeNotExiste) {
            $message = 'Não existe um método para retornar o valor do atributo: "' . $attributeName . '"';
            throw new InvalidArgument($message);
        }

        return null;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->_toArray($this);
    }

    /**
     * @param $value
     * @return array
     */
    private function _toArray($value): array
    {
        $result = [];
        $vars   = get_object_vars($value);
        foreach ($vars as $var => $val) {
            try {
                if (is_object($value) && $value instanceof DefaultStdClass) {
                    $val = $value->get($var);
                }
            } catch (InvalidArgument $e) {
                // Ignora essa propiedade se ela não tiver um método get definido.
                continue;
            }

            if (!is_object($val) && is_array($val)) {
                $novoVal = [];
                foreach ($val as $k => $v) {
                    $novoVal[$k] = $value->_toArray($v);
                }
                $val = $novoVal;
            }

            if (is_object($val)) {
                $val = $value->_toArray($val);
            }

            $result[$var] = $val;
        }

        return $result;
    }

    /**
     * @param array $values
     * @throws InvalidArgument
     */
    public function setFromArray(array $values): void
    {
        foreach ($values as $attr => $value) {
            $this->set($attr, $value);
        }
    }

}