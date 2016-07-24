package main

import (
	"bufio"
	"encoding/csv"
	"fmt"
	"io"
	"log"
	"os"
	"strconv"
)

func failOnError(err error) {
	if err != nil {
		log.Fatal("Error:", err)
	}
}

func main() {
	var pReadFile *os.File

	// 引数の内容確認
	fmt.Println(os.Args)
	fmt.Println(len(os.Args))

	if len(os.Args) < 2 {
		pReadFile = os.Stdin
	} else {
		var err error
		fmt.Println(os.Args[1])
		pReadFile, err = os.Open(os.Args[1]) // ここで:=してた。。
		failOnError(err)
		defer pReadFile.Close()
	}
	fmt.Println("File Open OK")
	method := 0
	const ARG_METHOD = 2
	if len(os.Args) > ARG_METHOD {
		method, _ = strconv.Atoi(os.Args[ARG_METHOD]) // errの返り値の処理をサボり
		if method > 0 && method > 2 {
			method = 0
		}
	}
	switch method {
	case 0:
		fmt.Println("NewReaderSize & ReadLine 版")
		reader := bufio.NewReaderSize(pReadFile, 4096)

		for {
			line, _, err := reader.ReadLine()
			if err == io.EOF {
				break
			}
			failOnError(err)
			fmt.Println(string(line))
		}
	case 1:
		fmt.Println("Scanner版")
		scanner := bufio.NewScanner(pReadFile)
		for scanner.Scan() {
			fmt.Println(scanner.Text())
		}
		if err := scanner.Err(); err != nil {
			failOnError(err)
		}
	case 2:
		fmt.Println("Using encoding/csv package")
		reader := csv.NewReader(pReadFile)
		reader.Comma = '\t' // delimiter
		for i := 0; i < 5; i++ {
			record, err := reader.Read()
			if err == io.EOF {
				log.Fatal("Error:", err)
				break
			}
			fmt.Println(record)
		}
	}
}
