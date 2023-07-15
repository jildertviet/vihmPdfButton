let bodyOfLesProgramma = jQuery('.lesprogramma-template-default, .single, .single-lesprogramma, .intro');

if(bodyOfLesProgramma.length > 0){ // Is this an intro page of Lesprogramma?
  let card = bodyOfLesProgramma.find('.card, .lesprogramma'); // Find the card
  if(card.length > 0){
    let cardFooter = card.find('.card-footer'); // Find the footer
    let button = cardFooter.children()[0];
    let pdfButton = jQuery(button).clone(); // New button, change href, content and css
    pdfButton.attr("href", "http://www.google.com/");
    pdfButton.attr("target", "_blank");
    pdfButton.html("Download pdf");
    pdfButton.css("margin-top: 0.75rem");
    pdfButton.appendTo(cardFooter);
  }
} else{
  console.log("Nothing found");
}
// Check if there's a class with
