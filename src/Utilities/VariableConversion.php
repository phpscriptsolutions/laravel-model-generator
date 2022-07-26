<?php

namespace PhpScriptSolutions\ModelGenerator\Utilities {

    /**
     * Class VariableConversion.
     */
    class VariableConversion
    {
        /**
         * Convert an underscored table name to an uppercased class name.
         *
         * @param $table
         *
         * @return mixed
         */
        public static function convertTableNameToClassName($table)
        {
            $string = str_replace(' ', '', ucwords(str_replace('_', ' ', $table)));

            return $string;
        }

        /**
         * Convert a PHP array into a string version.
         *
         * @param $array
         *
         * @return string
         */
        public static function convertArrayToString($array)
        {
            $string = '[';
            if (!empty($array)) {
                $string .= "\n        '";
                $string .= implode("',\n        '", $array);
                $string .= "'\n    ";
            }
            $string .= ']';

            return $string;
        }

        /**
         * Convert a boolean into a string.
         *
         * @param $boolean
         *
         * @return string true|false
         */
        public static function convertBooleanToString($boolean)
        {
            $string = $boolean ? 'true' : 'false';

            return $string;
        }
    }
}
