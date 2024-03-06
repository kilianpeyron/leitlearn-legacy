import { changeCard, flipCard } from '../../game/gameFunctions.js';

export const initFlashcards = () => {
    changeCardEvent();
    flipCardEvent();
    hideFlashcardContentEvent();
};

const flipCardEvent = () => {
    $('.flipped-card').on('click', function () {
        flipCard(this);
    });
};

const changeCardEvent = () => {
    let $currentCardIndex = 0;
    const $cards = $('.game .card');
    const $progressBar = $('#progressBar');

    $('.change-card').on('click', function () {
        const indexChange = parseInt($(this).data("change-card"));
        const newIndex = $currentCardIndex + indexChange;

        if (newIndex >= 0 && newIndex < $cards.length) {
            changeCard($cards, $currentCardIndex, $progressBar, indexChange);
            $currentCardIndex = newIndex;
        }
    });
};

const hideFlashcardContentEvent = () => {
    $('.show-btn').on('click', function () {
        $(this).closest('.flashcard').find('.content').toggleClass('show');
    });
}