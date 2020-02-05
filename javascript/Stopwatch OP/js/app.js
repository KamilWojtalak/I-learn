function CreateStopwatch() {
    let startTime, stopTime, isRunning, duration = 0;

    this.start = function() {
        if(isRunning) throw new Error('Stopwach is running');

        isRunning = true;
        startTime = new Date().getTime();

        return;
    }

    this.stop = function() {
        if(!isRunning) throw new Error ('Stopwatch has already stopped');

        isRunning = false;
        stopTime = (new Date().getTime() - startTime) / 1000;
        duration += stopTime;

        console.log('Stopwatch has been stopped');
        return `In this session stopwatch was turned on ${stopTime} s`;
    }

    Object.defineProperty(this, 'getDuration', {
        get: function() {return duration;}
    });

    this.reset = function() {
        isRunning = false;
        startTime = 0;
        stopTime = 0;
        duration = 0;

        console.log('Stopwatch has been reset');
    }
}

// Made with tutorial help
// I try to learn Objective Programming