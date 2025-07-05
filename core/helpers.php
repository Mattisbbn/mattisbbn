<?php
use App\Config;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function view($view, $data = []) {
    $viewPath = Config::VIEW_DIR . $view . '.php';
    if (!file_exists($viewPath)) {
        throw new Exception("Vue '$view' non trouvée dans $viewPath");
    }
    extract($data);
    ob_start();
    include $viewPath;
    return ob_get_clean();
}

function vite($entry) {
    $manifestPath = __DIR__ . '/../' . $_ENV['VITE_MANIFEST'];
    $devServer = $_ENV['VITE_SERVER'];
  
    
    if (strpos($entry, '/') === false) {
        $extension = pathinfo($entry, PATHINFO_EXTENSION);
        if ($extension === 'css') {
            $entry = 'assets/css/' . $entry;
        } else {
            $entry = 'assets/js/' . $entry;
        }
    }

    if ($_ENV['APP_ENV'] === 'DEV') {
        $tags = "<script type=\"module\" src=\"$devServer/@vite/client\"></script>\n";
        $tags .= "<script type=\"module\" src=\"$devServer/$entry\"></script>\n";
        return $tags;
    } elseif (file_exists($manifestPath)) {
        $manifest = json_decode(file_get_contents($manifestPath), true);
        if (!isset($manifest[$entry])) return '';
        $tags = '';
        if (isset($manifest[$entry]['css'])) {
            foreach ($manifest[$entry]['css'] as $css) {
                $tags .= "<link rel=\"stylesheet\" href=\"/build/$css\">\n";
            }
        }
        $file = $manifest[$entry]['file'] ?? null;
        if ($file) {
            $tags .= "<script type=\"module\" src=\"/build/$file\"></script>\n";
        }
        return $tags;
    }else{
        dd('no manifest');
    }
    return '';
}

function component(string $name, array $data = []): string{
    $file = Config::VIEW_DIR . "Components/$name.php";

    if (!file_exists($file)) {
        throw new Exception("Le composant $name n'existe pas dans $file");
    }

    extract($data);
    ob_start();
    include $file;
    return ob_get_clean();
}

function checkCSRF($token){
    if($_SESSION['CSRF_TOKEN'] !== $token){
        throw new Exception("CSRF token invalide");
    }
}

function sendMail($email, $name, $subject, $message){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $_ENV['MAIL_USERNAME'];
    $mail->Password = $_ENV['MAIL_PASSWORD'];
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($_ENV['MAIL_USERNAME'], $name);
    $mail->addAddress($_ENV['MAIL_USERNAME']);
    $mail->addReplyTo($email, $name);
    $mail->Subject = "Nouveau message de " . $name . " - " . $subject;
    $mail->Body = $message . "\n\n" . "Email : " . $email;

    $mail->send();
}