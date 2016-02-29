package main

import (
	"os"
	"log"
	"bufio"
	"fmt"
	"strings"
)

func main() {
	f, err := os.Open("zip_code_database.csv");
	if err != nil {
		log.Fatal(err)
		os.Exit(1)
	}
	defer f.Close()
	
	reader := bufio.NewScanner(f)
	for reader.Scan() {
		line := reader.Text()
		lineArr := strings.Split(line, ",")
		zip := lineArr[0]
		fmt.Println(zip)
	}
	
	if err := reader.Err(); err != nil {
		log.Fatal(err)
	}
}