const subscribe = document.querySelector('#subscribe');

const subscribeCta = document.querySelector('.subscribe-cta');
if (subscribeCta){
    subscribeCta.addEventListener('click', openSubscribeModal);
}

function openSubscribeModal(event){
  event.preventDefault();

  subscribe.classList.add('show');
  document.body.classList.add('no-scroll');
}

const subscribeClose = document.querySelector('#subscribe-close');
if (subscribeClose){
    subscribeClose.addEventListener('click', closeSubscribeModal);
}

function closeSubscribeModal(event){
  event.preventDefault();

  subscribe.classList.remove('show');
  document.body.classList.remove('no-scroll');
}
