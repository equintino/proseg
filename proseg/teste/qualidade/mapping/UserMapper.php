<?php
/**
 * Mapper for {@link Todo} from array.
 * @see TodoValidator
 */
final class UserMapper {
    private function __construct() {
    }
    /**
     * Maps array to the given {@link Todo}.
     * <p>
     * Expected properties are:
     * <ul>
     *   <li>id</li>
     *   <li>priority</li>
     *   <li>created_on</li>
     *   <li>due_on</li>
     *   <li>last_modified_on</li>
     *   <li>title</li>
     *   <li>description</li>
     *   <li>comment</li>
     *   <li>status</li>
     *   <li>deleted</li>
     * </ul>
     * @param Todo $todo
     * @param array $properties
     */
    public static function map(User $user, array $properties) {
        if (array_key_exists('nome', $properties)){
            $user->setNome($properties['nome']);
        }
        if (array_key_exists('funcao', $properties)){
            $user->setFuncao($properties['funcao']);
        }
        if (array_key_exists('matricula', $properties)){
            $user->setMatricula($properties['matricula']);
        }
        if (array_key_exists('email', $properties)){
            $user->setEmail($properties['email']);
        }
        if (array_key_exists('setor', $properties)){
            $user->setSetor($properties['setor']);
        }
        if (array_key_exists('login', $properties)){
            $user->setLogin($properties['login']);
        }
    }
}
?>