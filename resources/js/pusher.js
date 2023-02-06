import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'cc265c8d909c0c971c4e',
    cluster: 'ap1',
    forceTLS: true
});
