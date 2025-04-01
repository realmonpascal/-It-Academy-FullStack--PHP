<?php
class GrauVerificacio {
    public static function verificar(int $nota): string {
        if ($nota < 0) {
            return "La nota no puede ser negativa";
        }

        if ($nota > 100) {
            return "Nota invàlida";
        }

        if ($nota >= 60) {
            return "Primera divisio";
        } elseif ($nota >= 45) {
            return "Segona divisio";
        } elseif ($nota >= 33) {
            return "Tercera divisio";
        } else {
            return "Reprovarà";
        }
    }
}?>