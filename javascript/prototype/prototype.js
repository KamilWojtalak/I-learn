function Sentence(sentence) {
    this.sentence = sentence;
}

Sentence.prototype.getSentenceWithSomething = function() {
    return `${this.sentence} with something`; 
}

const randomSentence = new Sentence('This is random sentence');

console.log(randomSentence.getSentenceWithSomething());