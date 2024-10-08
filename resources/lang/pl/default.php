<?php

return [
    'title' => 'Mój profil',
    'profile_information' => 'Podstawowe informacje',
    'profile_information_description' => 'Zaktualizuj nazwę i adres e-mail swojego konta.',
    'name' => 'Nazwa użytkownika',
    'email' => 'E-mail',
    'avatar' => 'Zdjęcie',
    'password' => 'Hasło',
    'update_password' => 'Zaktualizuj hasło',
    'current_password' => 'Obecne hasło',
    'new_password' => 'Nowe hasło',
    'confirm_password' => 'Powtórz hasło',
    'ensure_your_password' => 'Upewnij się, że Twoje konto używa długiego, losowego, bezpiecznego hasła, aby zachować bezpieczeństwo.',
    'delete_account' => 'Usuń konto',
    'delete_account_description' => 'Trwale usuń konto.',
    'yes_delete_it' => 'Tak, usuń!',
    'are_you_sure' => 'Czy na pewno chcesz usunąć swoje konto? Tej operacji nie można cofnąć!',
    'incorrect_password' => 'Wprowadzone hasło jest nieprawidłowe. Spróbuj ponownie.',
    'user_load_error' => 'Uwierzytelniony obiekt użytkownika musi być modelem Eloquent, aby umożliwić aktualizację strony profilu.',
    'delete_account_card_description' => 'Po usunięciu konta wszystkie Twoje zasoby i dane zostaną trwale usunięte. Przed usunięciem konta pobierz wszelkie dane lub informacje, które chcesz zachować.',
    'saved_successfully' => 'Informacje o Twoim profilu zostały pomyślnie zapisane.',
    'custom_fields' => 'Pola niestandardowe',
    'custom_fields_description' => 'Zaktualizuj pola niestandardowe.',
    'save' => 'Zapisz',
    'token_name' => 'Nazwa tokena',
    'token_abilities' => 'Uprawnienia',
    'token_created_at' => 'Utworzono',
    'token_expires_at' => 'Wygasa',
    'token_section_title' => 'Tokeny API',
    'token_section_description' => 'Zarządzaj tokenami API, które umożliwiają usługom zewnętrznym dostęp do tej aplikacji w Twoim imieniu.',
    'token_action_label' => 'Utwórz token',
    'token_modal_heading' => 'Utwórz',
    'token_create_notification' => 'Token został pomyślnie utworzony!',
    'token_helper_text' => 'Twój token jest wyświetlany tylko raz podczas tworzenia. Jeśli zgubisz token, będziesz musiał go usunąć i utworzyć nowy.',
    'token_modal_heading_2' => 'Skopiuj osobisty token dostępu',
    'token_empty_state_heading' => 'Utwórz swój pierwszy token',
    'token_empty_state_description' => 'Utwórz osobisty token dostępu, aby rozpocząć.',
    'browser_section_title' => 'Sesje przeglądarki',
    'browser_section_description' => 'Zarządzaj i wyloguj swoje aktywne sesje na innych przeglądarkach i urządzeniach.',
    'browser_sessions_content' => 'Jeśli to konieczne, możesz wylogować się ze wszystkich innych sesji przeglądarki na wszystkich swoich urządzeniach. Poniżej wymieniono niektóre z Twoich ostatnich sesji, jednak lista ta może nie być pełna. Jeśli uważasz, że Twoje konto zostało naruszone, powinieneś również zaktualizować hasło.',
    'browser_sessions_device' => 'To urządzenie',
    'browser_sessions_last_active' => 'Ostatnia aktywność',
    'browser_sessions_log_out' => 'Wyloguj inne sesje przeglądarki',
    'browser_sessions_confirm_pass' => 'Wprowadź swoje hasło, aby potwierdzić, że chcesz wylogować się z innych sesji przeglądarki na wszystkich swoich urządzeniach.',
    'browser_sessions_logout_success_notification' => 'Wszystkie inne sesje przeglądarki zostały pomyślnie wylogowane.',
    'two_factor' => [
        'heading'                      => 'Uwierzytelnianie dwuskładnikowe',
        'description'                  => 'Dodaj dodatkowe zabezpieczenie do swojego konta, korzystając z uwierzytelniania dwuskładnikowego',
        'password_incorrect'           => 'Podany :attribute jest nieprawidłowy.',
        'notification_title_approved'  => 'Uwierzytelnianie dwuskładnikowe zostało zatwierdzone!',
        'code'                         => 'Kod',
        'recovery_code'                => 'Kod odzyskiwania',
        'use_recovery_code'            => 'Użyj kodu odzyskiwania',
        'you_can_logout'               => 'lub możesz się wylogować',
        'button_confirm'               => 'Potwierdź',
        'code_incorrect'               => 'Kod jest nieprawidłowy!',
        'enabled' => [
            'heading'                    => 'Aktywuj uwierzytelnianie dwuskładnikowe',
            'description'                => 'Uwierzytelnianie dwuskładnikowe dodaje dodatkową warstwę zabezpieczeń do twojego konta. Po włączeniu, podczas uwierzytelniania zostaniesz poproszony o podanie bezpiecznego, losowego tokena.',
            'sub_description'            => 'Aby włączyć uwierzytelnianie dwuskładnikowe, potwierdź swoje hasło poniżej.',
            'label'                      => 'Aktywuj uwierzytelnianie dwuskładnikowe',
            'modal_heading'              => 'Aktywuj uwierzytelnianie dwuskładnikowe',
            'modal_description'          => 'Czy na pewno chcesz włączyć uwierzytelnianie dwuskładnikowe?',
            'modal_submit_action_label'  => 'Włącz',
            'notification_title'         => 'Uwierzytelnianie dwuskładnikowe zostało włączone',
        ],
        'disabled' => [
            'heading'                       => 'Włączyłeś uwierzytelnianie dwuskładnikowe.',
            'description'                   => 'Po włączeniu uwierzytelniania dwuskładnikowego, podczas uwierzytelniania zostaniesz poproszony o podanie bezpiecznego, losowego tokena.',
            'sub_description'               => 'Aby zakończyć włączanie uwierzytelniania dwuskładnikowego, zeskanuj poniższy kod QR przy użyciu aplikacji uwierzytelniającej na swoim telefonie lub wprowadź klucz konfiguracyjny i podaj wygenerowany kod OTP.',
            'setup_key'                     => 'Klucz konfiguracyjny:',
            'recovery_code_description'     => 'Przechowuj te kody odzyskiwania w bezpiecznym menedżerze haseł. Mogą być używane do odzyskiwania dostępu do konta, jeśli stracisz urządzenie uwierzytelniające dwuskładnikowo.',
            'label'                         => 'Wyłącz uwierzytelnianie dwuskładnikowe',
            'modal_heading'                 => 'Wyłącz uwierzytelnianie dwuskładnikowe',
            'modal_description'             => 'Czy na pewno chcesz wyłączyć uwierzytelnianie dwuskładnikowe?',
            'modal_submit_action_label'     => 'Wyłącz',
            'notification_title'            => 'Uwierzytelnianie dwuskładnikowe zostało wyłączone',
        ],
    ],
];
