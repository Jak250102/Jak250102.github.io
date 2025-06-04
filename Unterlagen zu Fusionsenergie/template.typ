#import "@preview/oxifmt:0.2.1": strfmt
#import "@preview/fancy-units:0.1.1": unit, fancy-units-configure, add-macros, qty, num

#let ohm = { $Omega$ }
#let hr = { line(stroke: (paint: gray, thickness: 4pt, cap: "round"), length: 100%) }
#let vector(x) = $accent(#x, arrow)$
#let vec(x) = $accent(#x, arrow)$
#let func(x) = $f"("#x")="$
#let funcA(x) = $f"'("#x")="$
#let xfunc(x,y) = $#x"("#y")="$
#let xfuncA(x,y) = $#x"'("#y")="$
#let funcx() = $f"("x")="$
#let funcxA() = $f"'("x")="$
#let comp(x,y) = $underline(#x)_(#y)$
#let ej(x,y) = $#x e^(j #y°)$
#let e-j(x,y) = $#x e^(-j #y°)$

#let head1(x) = {
  set text(size: 20pt)
  set align(center)
  [ \ *#x* ]
}
#let head2(x) = {
  set text(size: 10pt)
  set align(left)
  underline[ \ *#x* ]
}
#let red1(x) = {
  set text(red)
  [ #x ]
}
#let blue1(x) = {
  set text(blue)
  [ #x ]
}
#let yellow1(x) = {
  set text(yellow)
  [ #x ]
}
#let green1(x) = {
  set text(green)
  [ #x ]
}
// expotentialschreibweise
#let sci(number, precision) = {
  strfmt("{test:." + str(precision) + "e}", test: number)
}

#fancy-units-configure(
per-mode: "fraction"
)

#let ssci(number, precision: 1) = {
  // --- Handle Zero ---
  if number == 0.0 {
    // Format 0.0 to the correct precision and return as string
    return repr(calc.round(0.0, decimals: precision))
  }

  // --- Scientific Notation Calculation (for non-zero numbers) ---
  let abs-num = calc.abs(number)

  // Calculate exponent (base 10)
  let exponent = calc.floor(calc.log(abs-num, base: 10))

  // Calculate the base (mantissa), preserving the original sign
  let base = number / calc.pow(10.0, exponent)

  // Round the base to the desired precision
  let rounded-base = calc.round(base, digits: precision)

  // Format using math mode for proper display (e.g., 1.2 x 10^18)
  // repr() converts numbers to strings for concatenation inside math
  $#repr(rounded-base) times 10^#{ repr(exponent) }$
}

// style the document
#let styling(it) = {
  set text(lang: "de", region: "de", 14pt, font: "Arial",)
  set heading(numbering: "1.")
  set align(left)
  set text(hyphenate: false)
  set par(justify: true)
  set page(
    margin: (top: 60pt, bottom: 40pt),
    header: [
      #set text(8pt)
      #smallcaps[Jannik Muy]
      #h(1fr) FTM1
    ],
  )
  set page(numbering: "I")
  show heading.where(level: 1): set text(size: 15pt)
  show heading.where(level: 1): set align(left)
  show heading.where(level: 2): set text(size: 18pt)
  show heading.where(level: 3): set text(size: 16pt)
  it
}

